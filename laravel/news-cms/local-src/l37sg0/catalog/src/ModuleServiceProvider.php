<?php

namespace L37sg0\Catalog;

use L37sg0\Catalog\Commands\Install;
use L37sg0\Catalog\Commands\UnInstall;
use L37sg0\Core\Providers\CoreServiceProvider;

class ModuleServiceProvider extends CoreServiceProvider
{
    public function boot()
    {
        $this->loadRoutesWithMiddleware('web', __DIR__ . '/../routes/admin.php');
    }
    public function register()
    {
        parent::register();
        $this->commands([
            Install::class,
            Uninstall::class,
        ]);

        $this->loadViewsFrom(__DIR__ . '/../views', 'catalog');
        // Merge the config with the application's existing config
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
        $this->mergeConfigRecursively('permissions', __DIR__ . '/../config/permissions.php');
    }
}
