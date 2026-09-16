<?php

namespace App\Models\Inventory;

enum TransactionStatus: int
{
//    case Pending        = 1;    //The transaction is initiated but not yet completed.
//    case In_Progress    = 2;    //The transaction is currently being processed.
//    case Completed      = 3;    //The transaction has been successfully executed.
//    case Failed         = 4;    //The transaction encountered an issue and could not be completed.
//    case Cancelled      = 5;    //The transaction was canceled before completion.
//    case On_Hold        = 6;    //The transaction is temporarily paused or delayed.
//    case Returned       = 7;    //Applicable for return transactions, indicating the items have been returned and restocked.
//    case Verified       = 8;    //Used for quality control transactions, indicating that items have passed inspection.
//    case Rejected       = 9;    //Quality control transaction status for items that did not pass inspection.
//    case Disposed       = 10;   //Indicates that items have been disposed of due to damage or other reasons.
//    case Reserved       = 11;   //Inventory has been reserved for a specific order.

    case Pending        = 1;    // The transaction is initiated but not yet completed.
    case In_Progress    = 2;    // The transaction is currently being processed.
    case Completed      = 3;    // The transaction has been successfully executed.
    case Failed         = 4;    // The transaction encountered an issue and could not be completed.
    case Cancelled      = 5;    // The transaction was canceled before completion.
}
