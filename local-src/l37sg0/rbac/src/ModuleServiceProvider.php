<?php

namespace L37sg0\Rbac;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use L37sg0\Core\Providers\CoreServiceProvider;
use L37sg0\Rbac\Commands\Install;
use L37sg0\Rbac\Commands\UnInstall;
use L37sg0\Rbac\Controllers\RolesController;
use L37sg0\Rbac\Controllers\UsersController;
use L37sg0\Rbac\Models\Role;

class ModuleServiceProvider extends CoreServiceProvider
{
    public function boot()
    {
        User::resolveRelationUsing('roles', function (User $user) {
            return $user->belongsToMany(Role::class, 'user_roles');
        });
    }
    
    
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

        $this->loadViewsFrom(__DIR__ . '/../views', 'rbac');
        // Merge the config with the application's existing config
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
    }
}
