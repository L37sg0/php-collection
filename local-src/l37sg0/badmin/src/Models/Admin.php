<?php

namespace L37sg0\Badmin\Models;

use App\Models\User;
use L37sg0\Badmin\Notifications\ResetPassword;

class Admin extends User
{
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
