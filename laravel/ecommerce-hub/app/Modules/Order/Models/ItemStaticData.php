<?php

namespace App\Modules\Order\Models;

interface ItemStaticData
{
    public const TABLE_NAME         = 'orders';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_ORDER_ID     = 'order_id';
    public const FIELD_PRODUCT_ID   = 'product_id';
}
