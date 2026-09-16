<?php

use L37sg0\Rockstar\Http\Controllers\AdminController;
use L37sg0\Rockstar\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Front Section
 */
Route::match(['get','post'], '', [FrontendController::class, 'index']);

/**
 * Admin Section
 */
Route::middleware(['web', 'auth'])->group(function () {
    Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard'], static function () {
        Route::match(['get', 'post'], '', function () {
            return redirect(\route('dashboard.icon-section.view'));
        });
        /** Icon Section */
        Route::group(['as' => 'icon-section.', 'prefix' => 'icon-section'], static function() {
            Route::get('view', [AdminController::class, 'iconSection'])->name('view');
            Route::post('update', [AdminController::class, 'iconSectionUpdate'])->name('update');
        });
        /** Home Section */
        Route::group(['as' => 'home-section.', 'prefix' => 'home-section'], static function() {
            Route::get('view', [AdminController::class, 'homeSection'])->name('view');
            Route::post('update/{imageName}', [AdminController::class, 'homeSectionUpdate'])->name('update');
        });
        /** Band Section */
        Route::group(['as' => 'band-section.', 'prefix' => 'band-section'], static function() {
            Route::get('view', [AdminController::class, 'bandSection'])->name('view');
            Route::post('band-member-update/{bandMember}', [AdminController::class, 'bandMemberUpdate'])->name('band-member-update');
            Route::post('band-text-update', [AdminController::class, 'bandTextUpdate'])->name('band-text-update');
        });
        /** Tour Section */
        Route::group(['as' => 'tour-section.', 'prefix' => 'tour-section'], static function() {
            Route::get('view', [AdminController::class, 'tourSection'])->name('view');
            Route::post('update/{tour?}', [AdminController::class, 'tourSectionUpdate'])->name('update');
            Route::get('delete/{tour}', [AdminController::class, 'tourSectionDelete'])->name('delete');
        });
        /** Contact Section */
        Route::group(['as' => 'contact-section.', 'prefix' => 'contact-section'], static function() {
            Route::get('view', [AdminController::class, 'contactSection'])->name('view');
            Route::post('update', [AdminController::class, 'contactSectionUpdate'])->name('update');
        });
        /** Social Section */
        Route::group(['as' => 'social-section.', 'social-section'], static function() {
            Route::get('view', [AdminController::class, 'socialSection'])->name('view');
            Route::post('update/{link}', [AdminController::class, 'socialSectionUpdate'])->name('update');
        });
        Route::match(['get', 'post'], 'social-section', [AdminController::class, 'socialSection'])->name('social-section');
    });
});
