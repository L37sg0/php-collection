<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FailedJobStaticData as StaticData;

/**
 * Model for read access to failed_jobs table
 */
class FailedJob extends Model implements StaticData
{
    protected $table = self::TABLE_NAME;
}
