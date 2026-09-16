<?php

use App\Models\Inventory\Product\Product as Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Model::FIELD_TITLE, 75);
            $table->tinyText(Model::FIELD_SUMMARY)->nullable();
            $table->smallInteger(Model::FIELD_TYPE)->default(0);
            $table->string(Model::FIELD_CONTENT);
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
