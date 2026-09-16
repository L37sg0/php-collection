<?php

namespace App\Models\Fulfilment;

interface ShipmentStaticData
{
    public const TABLE_NAME                     = 'shipment';
    public const FIELD_ID                       = 'id';
    public const FIELD_ORDER_ID                 = 'order_id';
    public const FIELD_TRACKING_NUMBER          = 'tracking_number';
    public const FIELD_CARRIER                  = 'carrier';
    public const FIELD_SHIPMENT_DATE            = 'shipment_date';
    public const FIELD_ESTIMATED_DELIVERY_DATE  = 'estimated_delivery_date';
    public const FIELD_ACTUAL_DELIVERY_DATE     = 'actual_delivery_date';
    public const FIELD_STATUS                   = 'status';
    public const FIELD_DELIVERY_INSTRUCTIONS    = 'delivery_instructions';
    public const FIELD_SHIPPING_METHOD          = 'shipping_method';
    public const FIELD_SHIPPING_COST            = 'shipping_cost';
    public const FIELD_ADDITIONAL_NOTES         = 'additional_notes';
    public const FIELD_CREATED_AT               = 'created_at';
    public const FIELD_UPDATED_AT               = 'updated_at';

    public const FILLABLE = [
        self::FIELD_ORDER_ID,
        self::FIELD_TRACKING_NUMBER,
        self::FIELD_CARRIER,
        self::FIELD_SHIPMENT_DATE,
        self::FIELD_ESTIMATED_DELIVERY_DATE,
        self::FIELD_ACTUAL_DELIVERY_DATE,
        self::FIELD_STATUS,
        self::FIELD_DELIVERY_INSTRUCTIONS,
        self::FIELD_SHIPPING_METHOD,
        self::FIELD_SHIPPING_COST,
        self::FIELD_ADDITIONAL_NOTES,
    ];

    public const CASTS = [];
}
