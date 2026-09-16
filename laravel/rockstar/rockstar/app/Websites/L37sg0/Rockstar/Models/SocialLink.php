<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use L37sg0\Rockstar\Database\Factories\SocialLinkFactory;

class SocialLink extends Model implements SocialLinkData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;

    protected static function newFactory()
    {
        return SocialLinkFactory::new();
    }
}
