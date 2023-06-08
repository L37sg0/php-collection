<?php

namespace App\Modules\Base\Inventory\Models;

use App\Modules\Base\Inventory\ModuleInterface;

interface ProductStaticData
{
    public const TABLE_NAME         = ModuleInterface::NAME . '_products';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_SKU          = 'sku';
    public const FIELD_TITLE        = 'title';
    public const FIELD_DESCRIPTION  = 'description';

    public const FILLABLE = [
        self::FIELD_SKU,
        self::FIELD_TITLE,
        self::FIELD_DESCRIPTION
    ];
}
