<?php

use App\Models\Inventory\Brand;
use App\Models\Inventory\Item as Model;
use App\Models\Inventory\Product\Product;
use App\Models\Inventory\Supplier;
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
                ->index()
                ->constrained(Product::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreignId(Model::FIELD_BRAND_ID)
                ->index()
                ->constrained(Brand::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreignId(Model::FIELD_SUPPLIER_ID)
                ->index()
                ->constrained(Supplier::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string(Model::FIELD_SKU, 100);
            $table->float(Model::FIELD_MRP)->default(0);
            $table->float(Model::FIELD_DISCOUNT)->default(0);
            $table->float(Model::FIELD_PRICE)->default(0);
            $table->smallInteger(Model::FIELD_QUANTITY)->default(0);
            $table->smallInteger(Model::FIELD_SOLD)->default(0);
            $table->smallInteger(Model::FIELD_AVAILABLE)->default(0);
            $table->smallInteger(Model::FIELD_DEFECTIVE)->default(0);
            $table->bigInteger(Model::FIELD_CREATED_BY);
            $table->bigInteger(Model::FIELD_UPDATED_BY)->default(null);
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
