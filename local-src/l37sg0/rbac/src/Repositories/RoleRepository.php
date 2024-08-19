<?php

namespace L37sg0\Rbac\Repositories;

use Illuminate\Database\Eloquent\Collection;
use L37sg0\Rbac\Models\Permission;
use L37sg0\Rbac\Models\Role;

class RoleRepository
{
    public static function getActiveUsers(Role $role): Collection
    {
        return $role->users->where('is_active', 1)->get();
    }

    public static function hasPermission(Role $role, Permission $permission): bool
    {
        if (!empty($role->permissions) and in_array($permission->slug, $role->permissions->pluck('slug')->toArray())) {
            return true;
        }
        return false;
    }
}
