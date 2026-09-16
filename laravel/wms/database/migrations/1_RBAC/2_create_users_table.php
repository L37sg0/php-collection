<?php

use App\Models\RBAC\User as Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_FIRST_NAME, 50);
            $table->string(Model::FIELD_MIDDLE_NAME, 50);
            $table->string(Model::FIELD_LAST_NAME, 50);
            $table->string(Model::FIELD_USERNAME, 50)->unique();
            $table->string(Model::FIELD_MOBILE, 15)->unique();
            $table->string(Model::FIELD_EMAIL, 50)->unique();
            $table->string(Model::FIELD_PASSWORD, 100);
            $table->rememberToken();
            $table->timestamp(Model::FIELD_REGISTERED_AT)->nullable();
            $table->timestamp(Model::FIELD_EMAIL_VERIFIED_AT)->nullable();
            $table->timestamp(Model::FIELD_LAST_LOGIN)->nullable();
            $table->tinyText(Model::FIELD_INTRO)->nullable();
            $table->text(Model::FIELD_PROFILE)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
