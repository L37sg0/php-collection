<?php

namespace App\Modules\Base\Finance\Models;

interface PriceStaticData
{
    public const TABLE_NAME         = 'prices';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_PRODUCT_ID   = 'product_id';
    public const FIELD_VALUE        = 'value';
    public const FIELD_CURRENCY     = 'currency';
}
