<?php

namespace L37sg0\Catalog\Controllers;

use Illuminate\Http\Request;
use L37sg0\Catalog\Models\CatalogProduct;

class CatalogProductController
{
    public function index()
    {
        $products = CatalogProduct::all();
        return view('catalog::admin.products.index', compact('products'));
    }

    public function edit()
    {
        $product = CatalogProduct::find(request()->query('id'));
        return view('catalog::admin.products.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data,[
            'in_stock' => isset($data['in_stock']) ? 1 : 0,
        ]);
        CatalogProduct::create($data);
        return response()->redirectToRoute('admin.products.list')->with('success', trans('Product saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data = array_merge($data, [
            'in_stock' => isset($data['in_stock']) ? 1 : 0,
        ]);
        $product = CatalogProduct::find($data['id']);
        $product->update($data);

        return response()->redirectToRoute('admin.products.list')->with('success', trans('Product updated successfully!'));
    }

    public function destroy()
    {
        CatalogProduct::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.products.list')->with('info', trans('Product deleted successfully!'));
    }
}
