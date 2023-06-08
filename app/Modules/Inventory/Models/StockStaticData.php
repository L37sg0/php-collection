<?php

namespace App\Modules\Inventory\Models;

use App\Modules\Inventory\ModuleInterface;

interface StockStaticData
{
    public const TABLE_NAME         = ModuleInterface::NAME . '_stocks';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_PRODUCT_ID   = 'product_id';
    public const FIELD_WAREHOUSE_ID = 'warehouse_id';
    public const FIELD_QUANTITY     = 'quantity';

    public const FILLABLE = [
        self::FIELD_PRODUCT_ID,
        self::FIELD_WAREHOUSE_ID,
        self::FIELD_QUANTITY
    ];

}
