<?php

namespace App\Modules\Base\Group\Database;

use Illuminate\Database\Migrations\Migration;
use App\Modules\Base\Group\Models\Group as Model;
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
