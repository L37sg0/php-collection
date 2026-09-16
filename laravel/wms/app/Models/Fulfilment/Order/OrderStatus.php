<?php

namespace App\Models\Fulfilment\Order;

enum OrderStatus: int
{
    case Pending    = 1;    // The order is awaiting processing.
    case Processing = 2;    // The order is currently being prepared for shipment.
    case Shipped    = 3;    // The order has been shipped to the customer.
    case Delivered  = 4;    // The order has been successfully delivered to the customer.
    case Cancelled  = 5;    // The order was canceled before processing or shipment.
}
