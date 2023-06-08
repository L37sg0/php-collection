<?php

namespace App\Modules\Base\Models;

enum GroupType:int
{
    case User           = 1;
    case Warehouse      = 2;
    case Marketplace    = 3;
    case Product        = 4;
}
