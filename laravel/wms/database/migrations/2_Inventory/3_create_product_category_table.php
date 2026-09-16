<?php

use App\Models\Inventory\Product\Category;
use App\Models\Inventory\Product\Product;
use App\Models\Inventory\Product\ProductCategory as Model;
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
            $table->foreignId(Model::FIELD_PRODUCT_ID)
                ->constrained(Product::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreignId(Model::FIELD_CATEGORY_ID)
            ->constrained(Category::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->timestamps();

//            $table->primary([Model::FIELD_PRODUCT_ID, Model::FIELD_CATEGORY_ID]);
            $table->index([Model::FIELD_PRODUCT_ID, Model::FIELD_CATEGORY_ID]);
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
