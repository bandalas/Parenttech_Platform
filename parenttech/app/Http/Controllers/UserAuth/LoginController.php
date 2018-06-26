<?php

namespace App\Http\Controllers\UserAuth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    //
    protected $redirectTo = '/home';

    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('web_admin');
    }
}
