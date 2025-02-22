<?php

use App\Models\Category;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use Illuminate\Http\Request;

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
});
Route::post('/news', function (Request $request) {
    return News::create($request->all());
});
Route::get('/rss', function () {
    $news = News::latest()->take(20)->get();
    $rss = view('rss', compact('news'));
    return Response::make($rss, 200)->header('Content-Type', 'application/xml');
});
