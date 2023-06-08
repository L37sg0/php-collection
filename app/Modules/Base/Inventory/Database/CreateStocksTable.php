<?php

namespace App\Modules\Base\Inventory\Database;

use App\Modules\Base\Globals;
use App\Modules\Base\Inventory\Models\Product;
use App\Modules\Base\Inventory\Models\Warehouse;
use Illuminate\Database\Migrations\Migration;
use App\Modules\Base\Inventory\Models\Stock as Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();

            $table->foreignId(Model::FIELD_PRODUCT_ID)
                ->constrained(Product::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);

            $table->foreignId(Model::FIELD_WAREHOUSE_ID)
                ->constrained(Warehouse::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);

            $table->bigInteger(Model::FIELD_QUANTITY);
            $table->timestamps();
        });
    }

    public function down()
    {

    }
}
