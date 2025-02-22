<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $news = News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $data['content'],
            'category_id' => $request->category_id
        ]);

        $tags = explode(',', $request->tags);
        $tagIds = [];

        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate([
                'name' => trim($tagName),
                'slug' => Str::slug($tagName)
            ]);
            $tagIds[] = $tag->id;
        }

        $news->tags()->sync($tagIds);

    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $news = News::whereRaw("MATCH(title, content) AGAINST(?)", [$query])->paginate(10);

        return view('news.search', compact('news', 'query'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
