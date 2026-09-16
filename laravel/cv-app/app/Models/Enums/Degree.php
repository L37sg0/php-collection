<?php

namespace App\Models\Enums;

enum Degree: int
{
    case Secondary = 1;
    case Bachelor = 2;
    case Master = 3;
    case Doctor = 4;
}
