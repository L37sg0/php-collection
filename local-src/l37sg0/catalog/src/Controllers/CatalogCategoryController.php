<?php

namespace L37sg0\Catalog\Controllers;

use Illuminate\Http\Request;
use L37sg0\Catalog\Models\CatalogCategory;

class CatalogCategoryController
{
    public function index()
    {
        $categories = CatalogCategory::all();
        return view('catalog::admin.categories.index', compact('categories'));
    }

    public function edit()
    {
        $category = CatalogCategory::find(request()->query('id'));
        return view('catalog::admin.categories.edit', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data,[
            'is_active' => isset($data['is_active']) ? 1 : 0,
        ]);
        $category = CatalogCategory::create($data);
        return response()->redirectToRoute('admin.categories.list')->with('success', trans('Category saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data, [
            'is_active' => isset($data['is_active']) ? 1 : 0,
        ]);
        $category = CatalogCategory::find($data['id']);
        $category->update($data);

        return response()->redirectToRoute('admin.categories.list')->with('success', trans('Category updated successfully!'));
    }

    public function destroy()
    {
        CatalogCategory::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.categories.list')->with('info', trans('Category deleted successfully!'));
    }
}
