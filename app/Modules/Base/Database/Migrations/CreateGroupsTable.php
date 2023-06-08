<?php

namespace App\Modules\Base\Database\Migrations;

use App\Modules\Base\Models\Group as Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_NAME);
            $table->string(Model::FIELD_DESCRIPTION);
            $table->tinyInteger(Model::FIELD_TYPE);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
}
