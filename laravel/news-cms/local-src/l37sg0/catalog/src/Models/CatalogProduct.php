<?php

namespace L37sg0\Catalog\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int                       id
 * @property string                    created_at
 * @property string                    updated_at
 * @property string                    title
 * @property string                    slug
 * @property string                    description
 * @property bool                      in_stock
 * @property Collection                productImages
// * @property null|CatalogProductImage  primaryImage
 */
class CatalogProduct extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'in_stock',
    ];

    public function productImages(): HasMany
    {
        return $this->hasMany(CatalogProductImage::class);
    }

    public function primaryImage(): ?CatalogProductImage
    {
        return (!empty($this->images) && !empty($this->images->where('is_primary', true)->get())) ? $this->images->where('is_primary', true)->first() : null;
    }
}
