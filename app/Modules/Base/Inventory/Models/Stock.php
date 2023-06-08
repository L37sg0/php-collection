<?php

namespace App\Modules\Base\Inventory\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model implements StockStaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
