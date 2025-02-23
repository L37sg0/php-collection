<?php

namespace L37sg0\Catalog\Controllers;

use Illuminate\Http\Request;
use L37sg0\Catalog\Models\CatalogAttribute;
use L37sg0\Catalog\Models\CatalogProduct;

class CatalogAttributeController
{
    public function index()
    {
        $attributes = CatalogAttribute::all();
        return view('catalog::admin.attributes.index', compact('attributes'));
    }

    public function edit()
    {
        $attribute = CatalogAttribute::find(request()->query('id'));
        return view('catalog::admin.attributes.edit', compact('attribute'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data,[
            'in_stock' => isset($data['in_stock']) ? 1 : 0,
        ]);
        CatalogAttribute::create($data);
        return response()->redirectToRoute('admin.attributes.list')->with('success', trans('Attribute saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data, [
            'in_stock' => isset($data['in_stock']) ? 1 : 0,
        ]);
        $attribute = CatalogAttribute::find($data['id']);
        $attribute->update($data);

        return response()->redirectToRoute('admin.attributes.list')->with('success', trans('Attribute updated successfully!'));
    }

    public function destroy()
    {
        CatalogAttribute::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.attributes.list')->with('info', trans('Attribute deleted successfully!'));
    }
}
