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
            Route::get('/roles', [RolesController::class, 'index'])->name('roles');
        });

        // Merge the config with the application's existing config
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
    }
}
