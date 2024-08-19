<?php

namespace L37sg0\Rbac\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string title
 * @property string slug
 * @property string description
 * @property string created_at
 * @property string updated_at
 */
class Permission extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
    ];
}
