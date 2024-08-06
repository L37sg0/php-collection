<?php

namespace L37sg0\Rbac;

use Illuminate\Support\ServiceProvider;
use L37sg0\Rbac\Commands\Install;
use L37sg0\Rbac\Commands\UnInstall;

class ModuleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Install::class,
            Uninstall::class,
        ]);
    }
}
