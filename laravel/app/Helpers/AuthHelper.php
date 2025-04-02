<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthHelper
{
    public function authenticateUsingSession($sessionKey = 'user_email')
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $user = null;

        if (isset($_SESSION[$sessionKey])) {
            $user = User::where('email', $_SESSION[$sessionKey])->first();
            if ($user) {
                Auth::login($user);
            }

            return true;
        }

        return Auth::logout();
    }
}
