<?php

namespace App\Models;

use App\Services\FacebookService;
use App\Services\GoogleNewsService;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;

/**
 * @property int                id
 * @property DateTimeInterface  created_at
 * @property DateTimeInterface  updated_at
 * @property string             title
 * @property string             slug
 * @property string             content
 * @property string             image
 * @property int                category_id
 * @property Collection         tags
 */
class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    protected static function booted(): void
    {
        static::created(function ($news) {
            $facebook = new FacebookService();
            $message = "📢 Нова статия: {$news->title}";
            $link = url('/news/' . $news->slug);
            $facebook->postToPage($message, $link);
        });
        static::created(function ($news) {
            (new GoogleNewsService())->pingGoogle();
        });
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tags');
    }


}
