<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    public function edit()
    {
        $tag = Tag::find(request()->query('id'));
        return view('admin.tags.edit', compact('tag'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if (!isset($data['slug']) || empty($data['slug'])) {
            $data = array_merge($data, [
                'slug' => Str::slug($data['name'])
            ]);
        }

        $tag = Tag::create($data);
        return response()->redirectToRoute('admin.tags.list')->with('success', trans('Tag saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if (!isset($data['slug']) || empty($data['slug'])) {
            $data = array_merge($data, [
                'slug' => Str::slug($data['name'])
            ]);
        }

        $tag = Tag::find($data['id']);
        $tag->update($data);

        return response()->redirectToRoute('admin.tags.list')->with('success', trans('Tag updated successfully!'));
    }

    public function destroy()
    {
        Tag::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.tags.list')->with('info', trans('Tag deleted successfully!'));
    }
}
