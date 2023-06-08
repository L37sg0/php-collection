<?php

namespace App\Modules\Base\Group\Models;

enum GroupType:int
{
    case Warehouse      = 1;
    case Marketplace    = 2;
    case Product        = 3;
}
