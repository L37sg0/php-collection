<?php

namespace App\Modules\Finance\Models;

interface TaxStaticData
{
    public const TABLE_NAME         = 'taxes';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_TITLE        = 'title';
    public const FIELD_DESCRIPTION  = 'description';
    public const FIELD_TYPE         = 'type';
    public const FIELD_VALUE        = 'value';
}
