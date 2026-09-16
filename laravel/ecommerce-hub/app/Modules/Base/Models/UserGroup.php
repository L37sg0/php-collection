<?php

namespace App\Modules\Base\Models;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model implements UserGroupStaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
