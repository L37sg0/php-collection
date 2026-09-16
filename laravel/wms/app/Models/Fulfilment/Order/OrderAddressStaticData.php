<?php

namespace App\Models\Fulfilment\Order;

interface OrderAddressStaticData
{
    public const TABLE_NAME         = 'address';

    public const FIELD_ID           = 'id';
    public const FIELD_ORDER_ID     = 'order_id';
    public const FIELD_FIRST_NAME   = 'first_name';
    public const FIELD_MIDDLE_NAME  = 'middle_name';
    public const FIELD_LAST_NAME    = 'last_name';
    public const FIELD_MOBILE       = 'mobile';
    public const FIELD_EMAIL        = 'email';
    public const FIELD_LINE_1       = 'line_1';
    public const FIELD_LINE_2       = 'line_2';
    public const FIELD_CITY         = 'city';
    public const FIELD_PROVINCE     = 'province';
    public const FIELD_COUNTRY      = 'country';
    public const FIELD_POSTCODE     = 'postcode';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FILLABLE = [
        self::FIELD_ORDER_ID,
        self::FIELD_FIRST_NAME,
        self::FIELD_MIDDLE_NAME,
        self::FIELD_LAST_NAME,
        self::FIELD_MOBILE,
        self::FIELD_EMAIL,
        self::FIELD_LINE_1,
        self::FIELD_LINE_2,
        self::FIELD_CITY,
        self::FIELD_PROVINCE,
        self::FIELD_COUNTRY,
        self::FIELD_POSTCODE
    ];

    public const CASTS = [];
}
