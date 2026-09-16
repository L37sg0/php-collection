<?php

use App\Models\Fulfilment\Shipment as Model;
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
            $table->smallInteger(Model::FIELD_TYPE)->default(0);
            $table->smallInteger(Model::FIELD_STATUS)->default(0);
            $table->float(Model::FIELD_SUB_TOTAL)->default(0);
            $table->float(Model::FIELD_ITEM_DISCOUNT)->default(0);
            $table->float(Model::FIELD_TAX)->default(0);
            $table->float(Model::FIELD_SHIPPING)->default(0);
            $table->float(Model::FIELD_TOTAL)->default(0);
            $table->string(Model::FIELD_PROMO, 50)->nullable();
            $table->float(Model::FIELD_DISCOUNT)->default(0);
            $table->float(Model::FIELD_GRAND_TOTAL)->default(0);
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
