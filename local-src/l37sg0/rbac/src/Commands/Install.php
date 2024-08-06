<?php

namespace L37sg0\Rbac\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Throwable;

class Install extends Command
{
    protected $signature = 'module:l37sg0_rbac:install';
    protected $description = 'Install module';

    public function handle() {
        try {
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->string('description');
                $table->timestamps();
            });
            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug');
                $table->string('description');
                $table->timestamps();
            });
            Schema::create('role_permissions', function (Blueprint $table) {
                $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
                $table->foreignId('permission_id')->constrained('permissions')->onDelete('cascade');
            });
            Schema::create('user_roles', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            });
            return Command::SUCCESS;
        } catch (Throwable $exception) {
            $this->error($exception->getMessage());
            return Command::FAILURE;
        }
    }
}
