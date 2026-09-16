<?php

namespace L37sg0\Rockstar\Models;

interface WebsiteData
{
    public const TABLE_NAME = 'website_data';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_ICON_URL = 'icon_url';
    public const FIELD_FIRST_HOME_IMAGE_URL = 'first_home_image_url';
    public const FIELD_SECOND_HOME_IMAGE_URL = 'second_home_image_url';
    public const FIELD_THIRD_HOME_IMAGE_URL = 'third_home_image_url';
    public const FIELD_BAND_TEXT = 'band_text';
    public const FIELD_CONTACT_IMAGE_URL = 'contact_image_url';

    public const FILLABLE = [
        self::FIELD_ICON_URL,
        self::FIELD_FIRST_HOME_IMAGE_URL,
        self::FIELD_SECOND_HOME_IMAGE_URL,
        self::FIELD_THIRD_HOME_IMAGE_URL,
        self::FIELD_BAND_TEXT,
        self::FIELD_CONTACT_IMAGE_URL,
    ];

}
