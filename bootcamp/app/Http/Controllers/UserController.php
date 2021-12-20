<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('auth.user.login');
    }
    public function google()
    {
        return 'google redirect';
    }
}