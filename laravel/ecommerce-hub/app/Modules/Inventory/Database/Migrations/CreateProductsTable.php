<?php

namespace App\Modules\Inventory\Database\Migrations;

use App\Modules\Inventory\Models\Product as Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
