<?php

namespace L37sg0\Rbac\Repositories;

use App\Models\User;
use L37sg0\Rbac\Models\Role;

class UserRepository
{
    public static function hasRole(User $user, Role $role): bool
    {
        if (!empty($user->roles) and in_array($role->slug, $user->roles->pluck('slug')->toArray())) {
            return true;
        }
        return false;
    }
}
