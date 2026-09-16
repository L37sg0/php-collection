<?php

namespace App\Models;

interface PasswordResetTokenStaticData
{
    public const TABLE_NAME         = 'password_reset_tokens';

    public const FIELD_EMAIL        = 'email';
    public const FIELD_TOKEN        = 'token';
    public const FIELD_CREATED_AT   = 'created_at';
}
