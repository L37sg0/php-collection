<?php

use App\Models\Fulfilment\Order\Order;
use App\Models\Fulfilment\Order\OrderItem as Model;
use App\Models\Inventory\Item;
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
            $table->foreignId(Model::FIELD_ITEM_ID)
                ->index()
                ->constrained(Item::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreignId(Model::FIELD_ORDER_ID)
                ->index()
                ->constrained(Order::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string(Model::FIELD_SKU, 100);
            $table->float(Model::FIELD_PRICE)->default(0);
            $table->float(Model::FIELD_DISCOUNT)->default(0);
            $table->smallInteger(Model::FIELD_QUANTITY)->default(0);
            $table->text(Model::FIELD_CONTENT)->nullable();
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
