<?php

use App\Helper\Config;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontController::class, 'welcome'])->name('welcome');
Route::resource('cvs', FrontController::class);
