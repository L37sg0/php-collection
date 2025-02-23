<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int                id
 * @property DateTimeInterface  created_at
 * @property DateTimeInterface  updated_at
 * @property string             title
 * @property string             slug
 * @property int                parent_id
 * @property Category           parent
 */
class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
