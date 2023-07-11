<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function getGoogleAuth()
    {
        return Socialite::driver('google')
            ->redirect();
    }

    public function authGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::firstOrCreate([
            'email' => $googleUser->email
        ], [
            'name' => $googleUser->getName(),
            'email_verified_at' => now(),
            'google_id' => $googleUser->getId(),
            'password' => null 
        ]);
        Auth::login($user, true);
        return redirect('/');
    }
}
