<?php

namespace L37sg0\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int            id
 * @property string         created_at
 * @property string         updated_at
 * @property int            product_id
 * @property int            image_id
 * @property bool           is_primary
 * @property int            sort_order
 * @property CatalogProduct product
 * @property CatalogImage   image
 */
class CatalogProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_id',
        'is_primary',
        'sort_order',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(CatalogProduct::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(CatalogImage::class);
    }
}
