<?php

namespace App\Modules\Base\Inventory\Models;

use App\Modules\Base\Inventory\ModuleInterface;

interface ProductGroupStaticData
{
    public const TABLE_NAME         = ModuleInterface::NAME . '_product_group';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_PRODUCT_ID   = 'product_id';
    public const FIELD_GROUP_ID     = 'group_id';

    public const FILLABLE = [
        self::FIELD_PRODUCT_ID,
        self::FIELD_GROUP_ID
    ];

}
