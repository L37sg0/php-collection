<?php

namespace L37sg0\Catalog\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    id
 * @property string created_at
 * @property string updated_at
 * @property string title
 * @property string slug
 * @property string type
 */
class CatalogAttribute extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
    ];
}
