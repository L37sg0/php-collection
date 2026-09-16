<?php

namespace App\Modules\Order\Models;

interface AddressStaticData
{
    public const TABLE_NAME         = 'addresses';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_ORDER_ID     = 'order_id';
    public const FIELD_COUNTRY      = 'country';
    public const FIELD_PROVINCE     = 'province';
    public const FIELD_TOWN         = 'town';
    public const FIELD_POSTCODE     = 'postcode';
    public const FIELD_ADDRESS_1    = 'address_1';
    public const FIELD_ADDRESS_2    = 'address_2';
}
