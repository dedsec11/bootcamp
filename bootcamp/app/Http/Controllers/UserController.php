<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class UserController extends Controller
{
    public function login()
    {
        return view('auth.user.login');
    }
    public function google()
    {
         return Socialite::driver('google')->redirect();
    }
}
