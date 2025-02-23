<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                id
 * @property DateTimeInterface  created_at
 * @property DateTimeInterface  updated_at
 * @property string             title
 * @property string             slug
 * @property int                parent_id
 */
class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
    ];
}
