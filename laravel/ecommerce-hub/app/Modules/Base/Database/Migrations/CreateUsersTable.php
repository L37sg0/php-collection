<?php

namespace App\Modules\Base\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use App\Modules\Base\Models\User as Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_NAME);
            $table->string(Model::FIELD_EMAIL)->unique();
            $table->timestamp(Model::FIELD_EMAIL_VERIFIED_AT)->nullable();
            $table->string(Model::FIELD_PASSWORD);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }

}
