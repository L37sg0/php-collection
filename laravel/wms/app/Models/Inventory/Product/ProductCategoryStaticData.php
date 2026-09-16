<?php

namespace App\Models\Inventory\Product;

interface ProductCategoryStaticData
{
    public const TABLE_NAME         = 'product_category';

    public const FIELD_ID           = 'id';
    public const FIELD_PRODUCT_ID   = 'product_id';
    public const FIELD_CATEGORY_ID  = 'category_id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_PRODUCT_ID,
        self::FIELD_CATEGORY_ID
    ];

    public const CASTS = [];
}
