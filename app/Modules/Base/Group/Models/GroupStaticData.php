<?php

namespace App\Modules\Base\Group\Models;

interface GroupStaticData
{
    public const TABLE_NAME         = 'groups';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_NAME         = 'name';
    public const FIELD_DESCRIPTION  = 'description';
    public const FIELD_TYPE         = 'type';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
        self::FIELD_TYPE
    ];

    public const CASTS = [
        self::FIELD_TYPE => GroupType::class
    ];
}
