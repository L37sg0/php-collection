<?php

namespace App\Modules\Base\Finance\Models;

interface InvoiceStaticData
{
    public const TABLE_NAME = 'invoices';
    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_ORDER_ID = 'order_id';
    public const FIELD_TOTAL    = 'total';
}
