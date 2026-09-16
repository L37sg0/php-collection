<?php

namespace App\Models\Inventory;

interface BrandStaticData
{
    public const TABLE_NAME         = 'brand';

    public const FIELD_ID           = 'id';
    public const FIELD_TITLE        = 'title';
    public const FIELD_SUMMARY      = 'summary';
    public const FIELD_CONTENT      = 'content';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_TITLE,
        self::FIELD_SUMMARY,
        self::FIELD_CONTENT
    ];

    public const CASTS = [];
}
