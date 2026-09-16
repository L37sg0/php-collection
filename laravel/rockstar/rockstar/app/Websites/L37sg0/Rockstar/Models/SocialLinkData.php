<?php

namespace L37sg0\Rockstar\Models;

interface SocialLinkData
{
    public const TABLE_NAME = 'social_links';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_NAME = 'name';
    public const FIELD_URL = 'url';
    public const FIELD_ICON = 'icon';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_ICON,
        self::FIELD_URL
    ];


}
