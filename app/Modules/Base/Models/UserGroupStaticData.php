<?php

namespace App\Modules\Base\Models;

use App\Modules\Base\ModuleInterface;

interface UserGroupStaticData
{
    public const TABLE_NAME         = ModuleInterface::NAME . '_user_group';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_USER_ID      = 'user_id';
    public const FIELD_GROUP_ID     = 'group_id';

    public const FILLABLE = [
        self::FIELD_USER_ID,
        self::FIELD_GROUP_ID
    ];

}
