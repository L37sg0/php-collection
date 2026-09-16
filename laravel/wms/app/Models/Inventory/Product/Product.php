<?php

namespace App\Models\Inventory\Product;

use App\Models\Inventory\Item;
use App\Models\Inventory\Product\ProductStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    /**
     * @return HasMany
     */
    public function meta()
    {
        return $this->hasMany(ProductMeta::class);
    }

    /**
     * @return BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, ProductCategory::TABLE_NAME);
    }

    /**
     * @return HasOne
     */
    public function item()
    {
        return $this->hasOne(Item::class);
    }
}
