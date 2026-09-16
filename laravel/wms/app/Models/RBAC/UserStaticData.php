<?php

namespace App\Models\RBAC;

interface UserStaticData
{
    public const TABLE_NAME                 = 'users';

    public const FIELD_ID                   = 'id';
    public const FIELD_FIRST_NAME           = 'first_name';
    public const FIELD_MIDDLE_NAME          = 'middle_name';
    public const FIELD_LAST_NAME            = 'last_name';
    public const FIELD_USERNAME             = 'name';
    public const FIELD_MOBILE               = 'mobile';
    public const FIELD_EMAIL                = 'email';
    public const FIELD_PASSWORD             = 'password';
    public const FIELD_REMEMBER_TOKEN       = 'remember_token';
    public const FIELD_REGISTERED_AT        = 'registered_at';
    public const FIELD_EMAIL_VERIFIED_AT    = 'email_verified_at';
    public const FIELD_LAST_LOGIN           = 'last_login';
    public const FIELD_INTRO                = 'intro';
    public const FIELD_PROFILE              = 'profile';
    public const FIELD_CREATED_AT           = 'created_at';
    public const FIELD_UPDATED_AT           = 'updated_at';

    public const FILLABLE = [
        self::FIELD_FIRST_NAME,
        self::FIELD_MIDDLE_NAME,
        self::FIELD_LAST_NAME,
        self::FIELD_USERNAME,
        self::FIELD_MOBILE,
        self::FIELD_EMAIL,
        self::FIELD_PASSWORD,
        self::FIELD_REMEMBER_TOKEN,
        self::FIELD_REGISTERED_AT,
        self::FIELD_EMAIL_VERIFIED_AT,
        self::FIELD_LAST_LOGIN,
        self::FIELD_INTRO,
        self::FIELD_PROFILE,
    ];

    public const CASTS = [
        self::FIELD_PASSWORD            => 'hashed',
        self::FIELD_REGISTERED_AT       => 'datetime',
        self::FIELD_EMAIL_VERIFIED_AT   => 'datetime',
        self::FIELD_LAST_LOGIN          => 'datetime'
    ];

    public const HIDDEN = [
        self::FIELD_PASSWORD,
        self::FIELD_REMEMBER_TOKEN,
    ];
}
