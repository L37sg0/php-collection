<?php

namespace App\Models\Fulfilment;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fulfilment\ShipmentStaticData as StaticData;

class Shipment extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
