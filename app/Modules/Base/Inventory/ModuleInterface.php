<?php

namespace App\Modules\Base\Inventory;

use App\Modules\Base\Inventory\Database\CreateProductGroupTable;
use App\Modules\Base\Inventory\Database\CreateProductsTable;
use App\Modules\Base\Inventory\Database\CreateStocksTable;
use App\Modules\Base\Inventory\Database\CreateWarehouseGroupTable;
use App\Modules\Base\Inventory\Database\CreateWarehousesTable;

interface ModuleInterface
{
    public const NAME   = 'inventory';

    public const MIGRATIONS = [
        CreateWarehousesTable::class,
        CreateWarehouseGroupTable::class,
        CreateProductsTable::class,
        CreateProductGroupTable::class,
        CreateStocksTable::class
    ];
}
