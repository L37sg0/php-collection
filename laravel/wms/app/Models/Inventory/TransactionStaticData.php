<?php

namespace App\Models\Inventory;

interface TransactionStaticData
{
    public const TABLE_NAME         = 'transaction';

    public const FIELD_ID           = 'id';
    public const FIELD_USER_ID      = 'user_id';
    public const FIELD_ITEM_ID      = 'item_id';
    public const FIELD_ORDER_ID     = 'order_id';
    public const FIELD_CODE         = 'code';
    public const FIELD_TYPE         = 'type';
    public const FIELD_MODE         = 'mode';
    public const FIELD_STATUS       = 'status';
    public const FIELD_CONTENT      = 'content';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_USER_ID,
        self::FIELD_ITEM_ID,
        self::FIELD_ORDER_ID,
        self::FIELD_CODE,
        self::FIELD_TYPE,
        self::FIELD_MODE,
        self::FIELD_STATUS,
        self::FIELD_CONTENT
    ];

    public const CASTS = [
        self::FIELD_TYPE    => TransactionType::class,
        self::FIELD_STATUS  => TransactionStatus::class,
        self::FIELD_MODE    => TransactionMode::class,
        self::FIELD_CODE    => TransactionCode::class
    ];
}
