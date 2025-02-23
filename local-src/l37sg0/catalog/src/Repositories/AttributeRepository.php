<?php

namespace L37sg0\Catalog\Repositories;

use L37sg0\Catalog\Constants\AttributeConstants;

class AttributeRepository
{
    public static function getTypesWithLabels(): array
    {
        return [
            AttributeConstants::TYPE_INT        => trans('Integer'),
            AttributeConstants::TYPE_DECIMAL    => trans('Decimal'),
            AttributeConstants::TYPE_TEXT       => trans('Text'),
            AttributeConstants::TYPE_BOOL       => trans('Boolean'),
        ];
    }
}
