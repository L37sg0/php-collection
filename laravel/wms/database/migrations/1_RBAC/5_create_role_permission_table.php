<?php

use App\Models\RBAC\Permission;
use App\Models\RBAC\Role;
use App\Models\RBAC\RolePermission as Model;
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
            $table->foreignId(Model::FIELD_ROLE_ID)
                ->constrained(Role::TABLE_NAME)
                ->onDelete('cascade');
            $table->foreignId(Model::FIELD_PERMISSION_ID)
                ->constrained(Permission::TABLE_NAME)
                ->onDelete('cascade');
            $table->timestamps();

            $table->index([
                Model::FIELD_ROLE_ID,
                Model::FIELD_PERMISSION_ID
            ]);
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
