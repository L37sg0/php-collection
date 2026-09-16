<?php

namespace App\Models\RBAC;

interface PermissionStaticData
{
    public const TABLE_NAME         = 'permission';

    public const FIELD_ID           = 'id';
    public const FIELD_TITLE        = 'title';
    public const FIELD_SLUG         = 'slug';
    public const FIELD_DESCRIPTION  = 'description';
    public const FIELD_ACTIVE       = 'active';
    public const FIELD_CONTENT      = 'content';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_TITLE,
        self::FIELD_SLUG,
        self::FIELD_DESCRIPTION,
        self::FIELD_ACTIVE,
        self::FIELD_CONTENT
    ];

    public const CASTS = [];
}
