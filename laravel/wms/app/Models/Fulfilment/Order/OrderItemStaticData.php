<?php

namespace App\Models\Fulfilment\Order;

interface OrderItemStaticData
{
    public const TABLE_NAME         = 'order_item';

    public const FIELD_ID           = 'id';
    public const FIELD_ITEM_ID      = 'item_id';
    public const FIELD_ORDER_ID     = 'order_id';
    public const FIELD_SKU          = 'sku';
    public const FIELD_PRICE        = 'price';
    public const FIELD_DISCOUNT     = 'discount';
    public const FIELD_QUANTITY     = 'quantity';
    public const FIELD_CONTENT      = 'content';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_ITEM_ID,
        self::FIELD_ORDER_ID,
        self::FIELD_SKU,
        self::FIELD_PRICE,
        self::FIELD_DISCOUNT,
        self::FIELD_QUANTITY,
        self::FIELD_CONTENT
    ];

    public const CASTS = [];
}
