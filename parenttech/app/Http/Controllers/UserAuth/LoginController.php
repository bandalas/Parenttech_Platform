<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    protected $redirectTo = '/home';

    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('user.auth.login');
    }
}
