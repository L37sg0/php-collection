<?php

namespace App\Models\Inventory;

enum TransactionMode: int
{
    /**
     * Transactions are entered and processed manually by warehouse staff, typically through a user interface in
     * the warehouse management system (WMS).
     * This mode is commonly used for smaller-scale operations and when precise control is required.
     */
    case Manual_Entry       = 1;

    /**
     * Transactions are recorded by scanning barcodes or QR codes on products, bins, or shelves.
     * This mode improves accuracy and efficiency by reducing data entry errors and speeding up processes.
     */
    case Barcode_Scanning   = 2;

    /**
     * RFID technology is used to automatically capture data by reading RFID tags on products and storage locations.
     * It provides real-time tracking and can be highly efficient for managing inventory movements.
     */
    case RFID               = 3;

    /**
     * Warehouse staff receive picking instructions and provide confirmations using voice commands and a headset.
     * This hands-free approach increases productivity and accuracy, particularly in high-volume order fulfillment.
     */
    case Voice_Picking      = 4;

    /**
     * Warehouse personnel use mobile devices (such as smartphones or tablets) to record transactions
     * and access the WMS. This mode offers flexibility and mobility, allowing staff to perform
     * transactions from various locations within the warehouse.
     */
    case Mobile_App         = 5;
}
