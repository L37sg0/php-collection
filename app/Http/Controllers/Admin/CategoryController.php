<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function edit()
    {
        $category = Category::find(request()->query('id'));
        return view('admin.categories.edit', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data, [
                'slug' => Str::slug($data['title'])
            ]);
        $category = Category::create($data);
        return response()->redirectToRoute('admin.categories.list')->with('success', trans('Category saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data, [
                'slug' => Str::slug($data['title'])
            ]);
        $category = Category::find($data['id']);
        $category->update($data);

        return response()->redirectToRoute('admin.categories.list')->with('success', trans('Category updated successfully!'));
    }

    public function destroy()
    {
        Category::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.categories.list')->with('info', trans('Category deleted successfully!'));
    }
}
