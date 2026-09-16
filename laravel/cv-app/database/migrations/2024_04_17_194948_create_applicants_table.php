<?php

use App\Models\Enums\Gender;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Applicant as Model;

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
            $table->string(Model::FIELD_MID_NAME, 50);
            $table->string(Model::FIELD_LAST_NAME, 50);
            $table->string(Model::FIELD_EMAIL, 50)->index()->unique();
            $table->string(Model::FIELD_PHONE, 15)->index()->unique();
            $table->tinyInteger(Model::FIELD_GENDER)->default(Gender::Other);
            $table->timestamp(Model::FIELD_BIRTH_DATE)->index();
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
