<?php

namespace App\Modules\Base;

use App\Modules\Base\Database\Migrations\CreateGroupsTable;
use App\Modules\Base\Database\Migrations\CreateUserGroupTable;
use App\Modules\Base\Database\Migrations\CreateUsersTable;

interface ModuleInterface
{
    public const NAME   = 'base';

    public const MIGRATIONS = [
        CreateUsersTable::class,
        CreateGroupsTable::class,
        CreateUserGroupTable::class
    ];
}
