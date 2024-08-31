<?php

namespace L37sg0\Badmin\Controller\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }
        /** @var User $user */
        $user = $request->user();
        $user->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
