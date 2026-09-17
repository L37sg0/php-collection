<?php

namespace L37sg0\Badmin;

use L37sg0\Badmin\Services\OverrideResetPasswordNotification;
use L37sg0\Badmin\Services\OverrideVerifyEmailNotification;
use L37sg0\Core\Providers\CoreServiceProvider;

class ModuleServiceProvider extends CoreServiceProvider
{
    public function boot()
    {
        $this->loadRoutesWithMiddleware('web', __DIR__ . '/../routes/admin.php');
        // Override the VerifyEmail notification
        (new OverrideVerifyEmailNotification())->execute();
        // Override the ResetPassword notification
        (new OverrideResetPasswordNotification())->execute();
    }

    public function register()
    {
        parent::register();
        $this->loadViewsFrom(__DIR__ . '/../views', 'admin');
        $this->mergeConfigRecursively('admin_menu', __DIR__ . '/../config/admin_menu.php');
    }
}
