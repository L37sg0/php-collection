<?php

namespace App\Models\JobBoard;

use App\Models\JobBoard\Relation\BelongsToGig;
use App\Models\JobBoard\Relation\BelongsToListing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model implements ClickFields
{
    use HasFactory;
    use BelongsToListing;
    use BelongsToGig;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;

}
