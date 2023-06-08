<?php

namespace App\Modules\Base\Database\Migrations;

use App\Modules\Base\Globals;
use App\Modules\Base\Models\Group;
use App\Modules\Base\Models\User;
use Illuminate\Database\Migrations\Migration;
use App\Modules\Base\Models\UserGroup as Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();

            $table->foreignId(Model::FIELD_USER_ID)
                ->constrained(User::TABLE_NAME)
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
