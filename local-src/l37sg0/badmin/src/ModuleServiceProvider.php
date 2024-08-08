<?php

namespace L37sg0\Badmin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use L37sg0\Badmin\Controller\DashboardController;

class ModuleServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::group(['as' => 'admin.', 'prefix' => 'admin'], function (){
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        });
        $this->loadViewsFrom(__DIR__ . '/../views', 'admin');
    }
}
