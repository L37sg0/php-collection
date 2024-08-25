<?php

use Illuminate\Support\Facades\Route;
use L37sg0\Rbac\Controllers\RolesController;
use L37sg0\Rbac\Controllers\UsersController;


Route::middleware(['auth', 'verified'])->name('admin.')->prefix('/admin')->group(function () {
    Route::name('roles.')->prefix('roles')->group(function () {
        Route::get('/', [RolesController::class, 'index'])->name('list');
        Route::get('/edit', [RolesController::class, 'edit'])->name('edit');
        Route::post('/store', [RolesController::class, 'store'])->name('store');
        Route::post('/update', [RolesController::class, 'update'])->name('update');
        Route::get('/delete', [RolesController::class, 'destroy'])->name('delete');
    });
    Route::name('users.')->prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('list');
        Route::get('/edit', [UsersController::class, 'edit'])->name('edit');
        Route::post('/store', [UsersController::class, 'store'])->name('store');
        Route::post('/update', [UsersController::class, 'update'])->name('update');
        Route::get('/delete', [UsersController::class, 'destroy'])->name('delete');
    });
});

