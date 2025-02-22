<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    id
 * @property string created_at
 * @property string updated_at
 * @property string title
 * @property string slug
 * @property int    parent_id
 */
class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
    ];
}
