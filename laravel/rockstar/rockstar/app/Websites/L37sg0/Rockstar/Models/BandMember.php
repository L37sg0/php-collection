<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use L37sg0\Rockstar\Database\Factories\BandMemberFactory;

class BandMember extends Model implements BandMemberData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;

    protected static function newFactory()
    {
        return BandMemberFactory::new();
    }
}
