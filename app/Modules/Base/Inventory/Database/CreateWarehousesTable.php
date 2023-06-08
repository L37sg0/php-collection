<?php

namespace App\Modules\Base\Inventory\Database;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\Base\Inventory\Models\Warehouse as Model;

class CreateWarehousesTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_NAME);
            $table->longText(Model::FIELD_ADDRESS);
            $table->longText(Model::FIELD_CONTACTS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
}
