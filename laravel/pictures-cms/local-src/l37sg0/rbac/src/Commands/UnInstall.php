<?php

namespace L37sg0\Rbac\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Throwable;

class UnInstall extends Command
{
    protected $signature = 'module:l37sg0_rbac:uninstall';
    protected $description = 'UnInstall module';

    public function handle()
    {
        try {
            Schema::table('role_permissions', function (Blueprint $table) {
                $table->dropForeign('role_permissions_role_id_foreign');
                $table->dropForeign('role_permissions_permission_id_foreign');
            });
            Schema::table('user_roles', function (Blueprint $table) {
                $table->dropForeign('user_roles_user_id_foreign');
                $table->dropForeign('user_roles_role_id_foreign');
            });
            Schema::dropIfExists('role_permissions');
            Schema::dropIfExists('user_roles');
            Schema::dropIfExists('roles');
            Schema::dropIfExists('permissions');
            return Command::SUCCESS;
        } catch (Throwable $exception) {
            $this->error($exception->getMessage());
            return Command::FAILURE;
        }
    }
}
