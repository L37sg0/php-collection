<?php

namespace App\Modules\Inventory\Models;

use Illuminate\Database\Eloquent\Model;

class WarehouseGroup extends Model implements WarehouseGroupStaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
