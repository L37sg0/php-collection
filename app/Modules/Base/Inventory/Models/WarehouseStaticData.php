<?php

namespace App\Modules\Base\Inventory\Models;

use App\Modules\Base\Inventory\ModuleInterface;

interface WarehouseStaticData
{
    public const TABLE_NAME         = ModuleInterface::NAME . '_warehouses';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_NAME         = 'name';
    public const FIELD_ADDRESS      = 'address';
    public const FIELD_CONTACTS     = 'contacts';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_ADDRESS,
        self::FIELD_CONTACTS
    ];
}
