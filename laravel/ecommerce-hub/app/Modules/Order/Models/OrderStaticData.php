<?php

namespace App\Modules\Order\Models;

interface OrderStaticData
{
    public const TABLE_NAME         = 'orders';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_REFERENCE        = 'reference';
    public const FIELD_STATUS           = 'status';
    public const FIELD_PURCHASE_DATE    = 'purchase_date';
    public const FIELD_SHIP_DATE        = 'ship_date';
    public const FIELD_TRACKING_NUMBER  = 'tracking_number';
    public const FIELD_COURIER          = 'courier';
    public const FIELD_DELIVERY_DATE    = 'delivery_date';
}
