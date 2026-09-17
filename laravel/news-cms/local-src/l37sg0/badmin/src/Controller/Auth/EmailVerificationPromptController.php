<?php

namespace L37sg0\Badmin\Controller\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        /** @var User $user */
        $user = $request->user();
        return $user->hasVerifiedEmail()
                    ? redirect()->intended(route('admin.dashboard', absolute: false))
                    : view('admin::auth.verify-email');
    }
}
