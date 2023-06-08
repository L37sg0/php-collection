<?php

namespace App\Modules\Base\Group\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model implements GroupStaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
