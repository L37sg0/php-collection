<?php

use App\Models\Fulfilment\Order\Order;
use App\Models\Inventory\Transaction as Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table(Model::TABLE_NAME, function (Blueprint $table) {
            $table->foreignId(Model::FIELD_ORDER_ID)
                ->nullable()
                ->index()
                ->constrained(Order::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(Model::TABLE_NAME, function (Blueprint $table) {
            $table->removeColumn(Model::FIELD_ORDER_ID);
        });
    }
};
