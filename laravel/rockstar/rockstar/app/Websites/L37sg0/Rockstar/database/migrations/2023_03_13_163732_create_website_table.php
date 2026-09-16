<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use L37sg0\Rockstar\Models\Website as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();

            $table->string(Model::FIELD_ICON_URL);
            $table->string(Model::FIELD_FIRST_HOME_IMAGE_URL);
            $table->string(Model::FIELD_SECOND_HOME_IMAGE_URL);
            $table->string(Model::FIELD_THIRD_HOME_IMAGE_URL);
            $table->text(Model::FIELD_BAND_TEXT);
            $table->string(Model::FIELD_CONTACT_IMAGE_URL);

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
