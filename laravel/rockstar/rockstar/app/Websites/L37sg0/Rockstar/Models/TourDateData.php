<?php

namespace L37sg0\Rockstar\Models;

interface TourDateData
{
    public const TABLE_NAME = 'tour_dates';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_DATE = 'date';
    public const FIELD_PLACE = 'place';

    public const FILLABLE = [
        self::FIELD_DATE,
        self::FIELD_PLACE
    ];

}
