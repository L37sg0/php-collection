<?php

namespace App\Modules\Base\Inventory\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model implements ProductGroupStaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
