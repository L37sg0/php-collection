<?php

namespace App\Models;

interface FailedJobStaticData
{
    public const TABLE_NAME         = 'failed_jobs';

    public const FIELD_ID           = 'id';
    public const FIELD_UUID         = 'uuid';
    public const FIELD_CONNECTION   = 'connection';
    public const FIELD_QUEUE        = 'queue';
    public const FIELD_PAYLOAD      = 'payload';
    public const FIELD_EXCEPTION    = 'exception';
    public const FIELD_FAILED_AT    = 'failed_at';
}
