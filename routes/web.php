<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\NewsController;
use App\Models\Category;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Feed\Feed;
use Spatie\Feed\FeedItem;

Route::feeds();

Route::get('/feed', function () {
    return new Feed(
        items: News::latest()->get()->map(fn($news) => new FeedItem([
            'id' => url("/news/{$news->slug}"),
            'title' => $news->title,
            'summary' => Str::limit(strip_tags($news->content), 200),
            'updated' => $news->updated_at,
            'link' => url("/news/{$news->slug}"),
            'authorName' => 'NewsSite',
        ])),
        title: 'Новини от ' . config('app.name'),
        url: url('/feed'),
        description: 'Последните новини от света на технологиите',
    );
});


Route::get('/', function (Request $request) {
    $categories = Category::all();
    $query = News::latest();

    if ($request->has('category')) {
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('slug', $request->category);
        });
    }

    $news = $query->paginate(10);
    return view('news.index', compact('news', 'categories'));
});

Route::get('/news', function () {
    return News::all();
});
Route::get('/news/{slug}', function ($slug) {
    $newsItem = News::where('slug', $slug)->firstOrFail();
    return view('news.show', compact('newsItem'));
})->name('news.show');
Route::post('/news', function (Request $request) {
    return News::create($request->all());
});
Route::get('/rss', function () {
    $news = News::latest()->take(20)->get();
    $rss = view('rss', compact('news'));
    return Response::make($rss, 200)->header('Content-Type', 'application/xml');
});
Route::get('/tag/{slug}', [NewsController::class, 'byTag'])->name('news.tag');
Route::get('/search', [NewsController::class, 'search'])->name('news.search');

Route::middleware(['auth', 'verified'])->name('admin.')->prefix('/admin')->group(function () {
    Route::name('categories.')->prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('list');
        Route::get('/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::post('/update', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete', [CategoryController::class, 'destroy'])->name('delete');
    });
    Route::name('tags.')->prefix('tags')->group(function () {
        Route::get('/', [TagsController::class, 'index'])->name('list');
        Route::get('/edit', [TagsController::class, 'edit'])->name('edit');
        Route::post('/store', [TagsController::class, 'store'])->name('store');
        Route::post('/update', [TagsController::class, 'update'])->name('update');
        Route::get('/delete', [TagsController::class, 'destroy'])->name('delete');
    });
});
