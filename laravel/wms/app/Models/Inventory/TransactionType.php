<?php

namespace App\Models\Inventory;

enum TransactionType: int
{
//    case Receiving          = 1;    // Used when goods are received into the warehouse.
//    case Picking            = 2;    // Indicates the process of selecting items from the warehouse to fulfill orders.
//    case Packing            = 3;    // Records the packing of items into containers or boxes for shipping.
//    case Shipping           = 4;    // Tracks the shipment of orders to customers.
//    case Stock_Transfer     = 5;    // Used when items are moved from one location to another within the warehouse.
//    case Adjustment         = 6;    // for manually adjusting inventory quantities to correct discrepancies.
//    case Cycle_Count        = 7;    // Represents the process of periodically counting a subset of inventory items.
//    case Returns            = 8;    // Used to process returned items and restock them in inventory.
//    case Assembly           = 9;    // Indicates the assembly of items from component parts.
//    case Disassembly        = 10;   // Records the disassembly of items into smaller components.
//    case Maintenance        = 11;   // Used for maintenance activities within the warehouse, such as equipment servicing.
//    case Quality_Control    = 12;   // for tracking quality control inspections of items.
//    case Waste_Disposal     = 13;   // Records the disposal of damaged or unsellable items.
//    case Inventory_Check    = 14;   // Used for routine inventory checks or audits.
//    case Reserve            = 15;   // Indicates the reservation of inventory for specific orders.

    case Receiving      = 1;    // Used when goods are received into the warehouse.
    case Picking        = 2;    // Indicates the process of selecting items from the warehouse to fulfill orders.
    case Shipping       = 3;    // Tracks the shipment of orders to customers.
    case Stock_Transfer = 4;    // Used when items are moved from one location to another within the warehouse.
    case Adjustment     = 5;    // for manually adjusting inventory quantities to correct discrepancies.
}
