<?php

namespace App\Modules\Inventory;

use App\Modules\Inventory\Database\Migrations\CreateProductGroupTable;
use App\Modules\Inventory\Database\Migrations\CreateProductsTable;
use App\Modules\Inventory\Database\Migrations\CreateStocksTable;
use App\Modules\Inventory\Database\Migrations\CreateWarehouseGroupTable;
use App\Modules\Inventory\Database\Migrations\CreateWarehousesTable;

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
