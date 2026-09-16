<?php

namespace L37sg0\Rockstar\Models;

interface BandMemberData
{
    public const TABLE_NAME = 'band_members';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_IMAGE_URL = 'image_url';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_DESCRIPTION,
        self::FIELD_IMAGE_URL,
    ];

}
