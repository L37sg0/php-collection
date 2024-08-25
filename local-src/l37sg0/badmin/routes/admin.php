<?php

use L37sg0\Badmin\Controller\DashboardController;
use L37sg0\Badmin\Controller\ProfileController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('/admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('dashboard');

    Route::name('profile.')->prefix('/profile')->middleware('auth')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });
});



require __DIR__.'/auth.php';
