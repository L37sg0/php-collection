<?php

namespace L37sg0\Catalog\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    id
 * @property string created_at
 * @property string updated_at
 * @property int    product_id
 * @property string type
 * @property float  value
 * @property string currency
 * @property string active_to
 */
class CatalogProductPrice extends Model
{
    protected $fillable = [
        'product_id',
        'type',
        'value',
        'currency',
        'active_to',
    ];
}
