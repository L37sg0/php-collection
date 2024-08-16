<?php

namespace L37sg0\Core;

use L37sg0\Core\Providers\CoreServiceProvider;

class ModuleServiceProvider extends CoreServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/admin_menu.php' => config_path('admin_menu.php')
        ], 'config');
    }
}
