<?php

namespace L37sg0\Rbac\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int id
 * @property string title
 * @property string slug
 * @property string description
 * @property string created_at
 * @property string updated_at
 */
class Role extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
    ];


    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
