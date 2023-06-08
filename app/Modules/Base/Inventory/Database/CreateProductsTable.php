<?php

namespace App\Modules\Base\Inventory\Database;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\Base\Inventory\Models\Product as Model;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_SKU);
            $table->string(Model::FIELD_TITLE);
            $table->longText(Model::FIELD_DESCRIPTION);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
}
