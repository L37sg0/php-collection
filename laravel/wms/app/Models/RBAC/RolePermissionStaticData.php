<?php

namespace App\Models\RBAC;

interface RolePermissionStaticData
{
    public const TABLE_NAME             = 'role_permission';

    public const FIELD_ID               = 'id';
    public const FIELD_ROLE_ID          = 'role_id';
    public const FIELD_PERMISSION_ID    = 'permission_id';
    public const FIELD_CREATED_AT       = 'crated_at';
    public const FIELD_UPDATED_AT       = 'updated_at';

    public const FILLABLE = [
        self::FIELD_ROLE_ID,
        self::FIELD_PERMISSION_ID
    ];

    public const CASTS = [];
}
