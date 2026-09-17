<?php

namespace L37sg0\Rbac\Commands;

use Illuminate\Console\Command;
use L37sg0\Rbac\Models\Permission;
use Symfony\Component\Console\Helper\ProgressBar;
use Throwable;

class SyncPermissions extends Command
{
    protected $signature = 'module:l37sg0_rbac:sync-permissions';
    protected $description = 'Synchronize permissions from all modules installed';

    public function handle(): int
    {
        try {
            $availablePermissions = config('permissions');
            $bar = $this->output->createProgressBar(count($availablePermissions));
            $this->cleanPermissions($availablePermissions);
            $this->addNewPermissions($availablePermissions, $bar);
            $bar->finish();
            return 0;
        } catch (Throwable $exception) {
            $this->error($exception->getMessage());
            return 1;
        }
    }

    private function cleanPermissions(array $availablePermissions): void
    {
        $slugs = array_column($availablePermissions, 'slug');
        $permissionsToClean = Permission::whereNotIn('slug', $slugs)->get();
        foreach ($permissionsToClean as $permission) {
            $permission->delete();
        }
    }

    private function addNewPermissions(array $availablePermissions, ProgressBar $bar): void
    {
        $slugs = Permission::all()->pluck('slug')->toArray();
        foreach ($availablePermissions as $permission) {
            if (!in_array($permission['slug'], $slugs)) {
                Permission::create($permission);
                $bar->advance();
            }
        }

    }
}
