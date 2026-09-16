<?php

namespace App\Modules\Inventory\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model implements ProductStaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
