<?php

namespace App\Modules\Base\Integration;

/**
 * @package Base
 * Use this in context of providing parameters to requests for HTTP, SFTP, SMTP
 * Extend this class and define "set", "get" methods in it
 */
abstract class SimpleParams
{
    use HasAttributes;
}
