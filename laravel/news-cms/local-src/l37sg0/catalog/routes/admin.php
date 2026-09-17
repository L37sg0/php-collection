<?php

use Illuminate\Support\Facades\Route;
use L37sg0\Catalog\Controllers\CatalogAttributeController;
use L37sg0\Catalog\Controllers\CatalogCategoryController;
use L37sg0\Catalog\Controllers\CatalogProductController;


Route::middleware(['auth', 'verified'])->name('admin.')->prefix('/admin')->group(function () {
    Route::name('categories.')->prefix('categories')->group(function () {
        Route::get('/', [CatalogCategoryController::class, 'index'])->name('list');
        Route::get('/edit', [CatalogCategoryController::class, 'edit'])->name('edit');
        Route::post('/store', [CatalogCategoryController::class, 'store'])->name('store');
        Route::post('/update', [CatalogCategoryController::class, 'update'])->name('update');
        Route::get('/delete', [CatalogCategoryController::class, 'destroy'])->name('delete');
    });
    Route::name('products.')->prefix('products')->group(function () {
        Route::get('/', [CatalogProductController::class, 'index'])->name('list');
        Route::get('/edit', [CatalogProductController::class, 'edit'])->name('edit');
        Route::post('/store', [CatalogProductController::class, 'store'])->name('store');
        Route::post('/update', [CatalogProductController::class, 'update'])->name('update');
        Route::get('/delete', [CatalogProductController::class, 'destroy'])->name('delete');
    });
    Route::name('attributes.')->prefix('attributes')->group(function () {
        Route::get('/', [CatalogAttributeController::class, 'index'])->name('list');
        Route::get('/edit', [CatalogAttributeController::class, 'edit'])->name('edit');
        Route::post('/store', [CatalogAttributeController::class, 'store'])->name('store');
        Route::post('/update', [CatalogAttributeController::class, 'update'])->name('update');
        Route::get('/delete', [CatalogAttributeController::class, 'destroy'])->name('delete');
    });
});

