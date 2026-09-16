<?php

namespace App\Models\Fulfilment\Order;

interface OrderStaticData
{
    public const TABLE_NAME             = 'order';

    public const FIELD_ID               = 'id';
    public const FIELD_TYPE             = 'type';
    public const FIELD_STATUS           = 'status';
    public const FIELD_SUB_TOTAL        = 'sub_total';
    public const FIELD_ITEM_DISCOUNT    = 'item_discount';
    public const FIELD_TAX              = 'tax';
    public const FIELD_SHIPPING         = 'shipping';
    public const FIELD_TOTAL            = 'total';
    public const FIELD_PROMO            = 'promo';
    public const FIELD_DISCOUNT         = 'discount';
    public const FIELD_GRAND_TOTAL      = 'grand_total';
    public const FIELD_CONTENT          = 'content';
    public const FIELD_CREATED_AT       = 'created_at';
    public const FIELD_UPDATED_AT       = 'updated_at';

    public const FILLABLE = [
        self::FIELD_TYPE,
        self::FIELD_STATUS,
        self::FIELD_SUB_TOTAL,
        self::FIELD_ITEM_DISCOUNT,
        self::FIELD_TAX,
        self::FIELD_SHIPPING,
        self::FIELD_TOTAL,
        self::FIELD_PROMO,
        self::FIELD_DISCOUNT,
        self::FIELD_GRAND_TOTAL,
        self::FIELD_CONTENT
    ];

    public const CASTS = [
        self::FIELD_STATUS  => OrderStatus::class,
        self::FIELD_TYPE    => OrderType::class
    ];
}
