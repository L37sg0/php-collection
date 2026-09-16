<?php

use App\Modules\Base\ModuleInterface;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach (ModuleInterface::MIGRATIONS as $migrationClass) {
            $migration = new $migrationClass;
            $migration->up();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (array_reverse(ModuleInterface::MIGRATIONS) as $migrationClass) {
            $migration = new $migrationClass;
            $migration->down();
        }
    }
};
