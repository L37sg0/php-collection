<?php

namespace App\Models\Fulfilment\Order;

enum OrderType: int
{
    case Standard_Order     = 1;    // A regular customer purchase of products.
    case Express_Order      = 2;    // An expedited or same-day delivery order for urgent shipments.
    case Subscription_Order = 3;    // An order for a product or service on a recurring basis.
    case Bulk_Order         = 4;    // A large-volume order, often placed by businesses or for wholesale purposes.
    case Return_Order       = 5;    // An order initiated by a customer to return previously purchased items.
}
