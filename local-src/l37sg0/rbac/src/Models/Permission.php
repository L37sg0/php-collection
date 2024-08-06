<?php

namespace L37sg0\Rbac\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @property string slug
 * @property string description
 */
class Permission extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
    ];
}
