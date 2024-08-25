<?php

namespace L37sg0\Rbac;

use App\Models\User;
use L37sg0\Core\Providers\CoreServiceProvider;
use L37sg0\Rbac\Commands\Install;
use L37sg0\Rbac\Commands\UnInstall;
use L37sg0\Rbac\Models\Role;

class ModuleServiceProvider extends CoreServiceProvider
{
    public function boot()
    {
        User::resolveRelationUsing('roles', function (User $user) {
            return $user->belongsToMany(Role::class, 'user_roles');
        });
        $this->loadRoutesWithMiddleware('web', __DIR__ . '/../routes/admin.php');
    }


    public function register()
    {
        $this->commands([
            Install::class,
            Uninstall::class,
        ]);

        $this->loadViewsFrom(__DIR__ . '/../views', 'rbac');
        // Merge the config with the application's existing config
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
    }
}
