<?php

namespace App\Modules\Inventory\Database\Migrations;

use App\Modules\Base\Globals;
use App\Modules\Base\Models\Group;
use App\Modules\Inventory\Models\Warehouse;
use App\Modules\Inventory\Models\WarehouseGroup as Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseGroupTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();

            $table->foreignId(Model::FIELD_WAREHOUSE_ID)
                ->constrained(Warehouse::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);

            $table->foreignId(Model::FIELD_GROUP_ID)
                ->constrained(Group::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }

}
