<?php

namespace L37sg0\Rbac\Services;

use Illuminate\Auth\Access\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Gate;
use L37sg0\Rbac\Models\Permission;
use L37sg0\Rbac\Repositories\UserRepository;

class RegisterRbacGate
{
    public static function execute(Application $app)
    {
        if (!$app->runningInConsole()) { //prevents throwing error when run php artisan migration to create permissions table
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
}
