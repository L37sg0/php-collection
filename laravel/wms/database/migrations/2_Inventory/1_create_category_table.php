<?php

use App\Models\Inventory\Product\Category as Model;
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
            $table->foreignId(Model::FIELD_PARENT_ID)
                ->nullable()
                ->constrained(Model::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string(Model::FIELD_TITLE, 75);
            $table->string(Model::FIELD_META_TITLE, 100)->nullable();
            $table->string(Model::FIELD_SLUG, 100);
            $table->text(Model::FIELD_CONTENT);
            $table->timestamps();

            $table->index([Model::FIELD_PARENT_ID]);
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
