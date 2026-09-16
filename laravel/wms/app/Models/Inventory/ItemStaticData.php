<?php

namespace App\Models\Inventory;

interface ItemStaticData
{
    public const TABLE_NAME         = 'item';

    public const FIELD_ID           = 'id';
    public const FIELD_PRODUCT_ID   = 'product_id';
    public const FIELD_BRAND_ID     = 'brand_id';
    public const FIELD_SUPPLIER_ID  = 'supplier_id';
    public const FIELD_SKU          = 'sku';
    public const FIELD_MRP          = 'mrp';
    public const FIELD_DISCOUNT     = 'discount';
    public const FIELD_PRICE        = 'price';
    public const FIELD_QUANTITY     = 'quantity';
    public const FIELD_SOLD         = 'sold';
    public const FIELD_AVAILABLE    = 'available';
    public const FIELD_DEFECTIVE    = 'defective';
    public const FIELD_CREATED_BY   = 'created_by';
    public const FIELD_UPDATED_BY   = 'updated_by';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_PRODUCT_ID,
        self::FIELD_BRAND_ID,
        self::FIELD_SUPPLIER_ID,
        self::FIELD_SKU,
        self::FIELD_MRP,
        self::FIELD_DISCOUNT,
        self::FIELD_PRICE,
        self::FIELD_QUANTITY,
        self::FIELD_SOLD,
        self::FIELD_AVAILABLE,
        self::FIELD_DEFECTIVE,
        self::FIELD_CREATED_BY,
        self::FIELD_UPDATED_BY
    ];

    public const CASTS = [];
}
