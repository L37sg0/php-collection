<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PersonalAccessTokenStaticData as StaticData;

/**
 * Model for read access to personal_access_tokens table
 */
class PersonalAccessToken extends Model implements StaticData
{
    protected $table = self::TABLE_NAME;
}
