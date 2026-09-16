<?php

use App\Models\Inventory\Item;
use App\Models\Inventory\Transaction as Model;
use App\Models\RBAC\User;
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
            $table->foreignId(Model::FIELD_USER_ID)
                ->index()
                ->constrained(User::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->foreignId(Model::FIELD_ITEM_ID)
                ->nullable()
                ->index()
                ->constrained(Item::TABLE_NAME)
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string(Model::FIELD_CODE, 100);
            $table->smallInteger(Model::FIELD_TYPE)->default(0);
            $table->smallInteger(Model::FIELD_MODE)->default(0);
            $table->smallInteger(Model::FIELD_STATUS)->default(0);
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
