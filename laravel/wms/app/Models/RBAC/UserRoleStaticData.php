<?php

namespace App\Models\RBAC;

interface UserRoleStaticData
{
    public const TABLE_NAME         = 'user_role';

    public const FIELD_ID           = 'id';
    public const FIELD_USER_ID      = 'user_id';
    public const FIELD_ROLE_ID      = 'role_id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_USER_ID,
        self::FIELD_ROLE_ID
    ];

    public const CASTS = [];
}
