<?php

use App\Models\Fulfilment\Order\Order;
use App\Models\Fulfilment\Order\OrderAddress as Model;
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
            $table->foreignId(Model::FIELD_ORDER_ID)
                ->index()
                ->nullable()
                ->constrained(Order::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string(Model::FIELD_FIRST_NAME, 50)->nullable();
            $table->string(Model::FIELD_MIDDLE_NAME, 50)->nullable();
            $table->string(Model::FIELD_LAST_NAME, 50)->nullable();
            $table->string(Model::FIELD_MOBILE,15)->nullable();
            $table->string(Model::FIELD_EMAIL, 50)->nullable();
            $table->string(Model::FIELD_LINE_1, 50)->nullable();
            $table->string(Model::FIELD_LINE_2, 50)->nullable();
            $table->string(Model::FIELD_CITY, 50)->nullable();
            $table->string(Model::FIELD_PROVINCE, 50)->nullable();
            $table->string(Model::FIELD_COUNTRY, 50)->nullable();
            $table->string(Model::FIELD_POSTCODE, 10);
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
