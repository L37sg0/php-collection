<?php

namespace L37sg0\Rbac;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use L37sg0\Core\Providers\CoreServiceProvider;
use L37sg0\Rbac\Commands\Install;
use L37sg0\Rbac\Commands\UnInstall;
use L37sg0\Rbac\Controllers\RolesController;

class ModuleServiceProvider extends CoreServiceProvider
{

    public function register()
    {
        $this->commands([
            Install::class,
            Uninstall::class,
        ]);

        Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
            Route::name('roles.')->prefix('roles')->group(function () {
                Route::get('/', [RolesController::class, 'index'])->name('list');
                Route::get('/edit', [RolesController::class, 'edit'])->name('edit');
                Route::get('/delete', [RolesController::class, 'destroy'])->name('delete');
            });
        });

        $this->loadViewsFrom(__DIR__ . '/../views', 'rbac');
        // Merge the config with the application's existing config
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
    }
}
