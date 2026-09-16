<?php

namespace App\Models\Inventory;

interface SupplierStaticData
{
    public const TABLE_NAME         = 'supplier';

    public const FIELD_ID           = 'id';
    public const FIELD_NAME         = 'name';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_NAME
    ];
}
