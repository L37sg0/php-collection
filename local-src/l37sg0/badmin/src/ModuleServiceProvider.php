<?php

namespace L37sg0\Badmin;

use Illuminate\Support\Facades\Route;
use L37sg0\Badmin\Controller\DashboardController;
use L37sg0\Core\Providers\CoreServiceProvider;

class ModuleServiceProvider extends CoreServiceProvider
{

    public function register()
    {
        Route::group(['as' => 'admin.', 'prefix' => 'admin'], function (){
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        });
        $this->loadViewsFrom(__DIR__ . '/../views', 'admin');
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
    }
}
