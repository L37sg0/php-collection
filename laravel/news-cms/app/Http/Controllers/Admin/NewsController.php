<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function edit()
    {
        $newsItem = News::find(request()->query('id'));
        return view('admin.news.edit', compact('newsItem'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (!isset($data['slug']) || empty($data['slug'])) {
            $data = array_merge($data, [
                'slug' => Str::slug($data['title'])
            ]);
        }

        $newsItem = News::create($data);
        return response()->redirectToRoute('admin.news.list')->with('success', trans('News Item saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if (!isset($data['slug']) || empty($data['slug'])) {
            $data = array_merge($data, [
                'slug' => Str::slug($data['title'])
            ]);
        }

        $newsItem = News::find($data['id']);
        $newsItem->update($data);

        return response()->redirectToRoute('admin.news.list')->with('success', trans('News Item updated successfully!'));
    }

    public function destroy()
    {
        News::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.news.list')->with('info', trans('News Item deleted successfully!'));
    }
}
