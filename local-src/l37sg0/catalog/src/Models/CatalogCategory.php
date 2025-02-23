<?php

namespace L37sg0\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int                id
 * @property string             created_at
 * @property string             updated_at
 * @property int                parent_id
 * @property string             title
 * @property string             slug
 * @property bool               is_active
 * @property CatalogCategory    parent
 */
class CatalogCategory extends Model
{
    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'is_active',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
