<?php

namespace App\Models\Inventory\Product;

use App\Models\Inventory\Product\ProductCategoryStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model implements StaticData
{
    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;
}
