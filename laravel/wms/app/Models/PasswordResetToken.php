<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PasswordResetTokenStaticData as StaticData;

/**
 * Model for read access to password_reset_tokens table
 */
class PasswordResetToken extends Model implements StaticData
{
    protected $table = self::TABLE_NAME;
}
