<?php

namespace L37sg0\Rbac;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use L37sg0\Core\Providers\CoreServiceProvider;
use L37sg0\Rbac\Commands\Install;
use L37sg0\Rbac\Commands\UnInstall;
use L37sg0\Rbac\Models\Permission;
use L37sg0\Rbac\Models\Role;
use L37sg0\Rbac\Repositories\UserRepository;

class ModuleServiceProvider extends CoreServiceProvider
{
    public function boot()
    {
        User::resolveRelationUsing('roles', function (User $user) {
            return $user->belongsToMany(Role::class, 'user_roles');
        });
        $this->loadRoutesWithMiddleware('web', __DIR__ . '/../routes/admin.php');

        if (!$this->app->runningInConsole()) { //prevents throwing error when run php artisan migration to create permissions table
            foreach (Permission::all() as $permission) {
                Gate::define($permission->slug, function ($user) use ($permission) {
                    foreach ($permission->roles as $role) {
                        if (UserRepository::hasRole($user, $role)) {
                            return Response::allow();
                        }
                    }
                    return Response::deny(trans('You don\'t have permission to access this page.'));
                });
            }
        }
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
