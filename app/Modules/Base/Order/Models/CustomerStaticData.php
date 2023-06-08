<?php

namespace App\Modules\Base\Order\Models;

interface CustomerStaticData
{
    public const TABLE_NAME         = 'customers';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_ORDER_ID     = 'order_id';
    public const FIELD_FIRST_NAME   = 'first_name';
    public const FIELD_LAST_NAME    = 'last_name';
    public const FIELD_EMAIL        = 'email';
    public const FIELD_PHONE        = 'phone';
}
