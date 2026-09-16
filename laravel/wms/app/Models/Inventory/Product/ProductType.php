<?php

namespace App\Models\Inventory\Product;

enum ProductType: int
{
//    case SimpleProduct = 1;
//    case VariableProduct = 2;

    case Raw_Materials  = 1;    // Unprocessed materials used in manufacturing or production processes.
    case Components     = 2;    // Parts or materials used to assemble finished products.
    case Finished_Goods = 3;    // Fully assembled and ready-to-sell products.
    case Electronics    = 4;    // Electronic devices and components.
    case Apparel        = 5;    // Clothing and fashion items.
}
