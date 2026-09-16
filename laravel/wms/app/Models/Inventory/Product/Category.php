<?php

namespace App\Models\Inventory\Product;

use App\Models\Inventory\Product\CategoryStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    /**
     * @return BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, self::FIELD_PARENT_ID, self::FIELD_ID);
    }

    /**
     * @return HasMany
     */
    public function childs()
    {
        return $this->hasMany(self::class, self::FIELD_PARENT_ID, self::FIELD_ID);
    }

    /**
     * @return BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, ProductCategory::TABLE_NAME);
    }
}
