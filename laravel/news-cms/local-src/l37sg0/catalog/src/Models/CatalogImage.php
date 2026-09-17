<?php

namespace L37sg0\Catalog\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    id
 * @property string created_at
 * @property string updated_at
 * @property string image_url
 * @property string alt_text
 */
class CatalogImage extends Model
{
    protected $fillable = [
        'image_url',
        'alt_text',
    ];
}
