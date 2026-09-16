<?php

namespace App\Models\Inventory;

enum TransactionCode: string
{
    /**
     *  This code can be used to record the creation of a new customer
     * order. It corresponds to the process of creating and entering new
     * orders into the system.
     */
    case Order_Creation         = 'ORD001';

    /**
     *  use this code to indicate the fulfillment of customer orders. It corresponds
     * to picking, packing, and preparing orders for shipment.

     */
    case Order_Fulfillment          = 'ORD002';

    /**
     *  This code can be used to record the shipment of customer orders.
     * It corresponds to the process of dispatching orders to customers.

     */
    case Order_Shipment         = 'ORD003';

    /**
     *  Implement this code for recording the processing of returns from customers. It
     * includes the inspection, restocking, and updating of inventory.

     */
    case Return_Processing          = 'RET001';

    /**
     *  use this code to perform manual adjustments to inventory levels that are not
     * directly related to customer orders. It can be used for tasks
     * such as correcting discrepancies or handling inventory audits.
     */
    case Inventory_Adjustment           = 'INV001';
}
