<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Event\EventController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use phpDocumentor\Reflection\Types\Boolean;

class AdminLoginController extends Controller
{
    //
    protected $eventController;

    public function __construct()
    {
        $this->middleware('guest:admin');
        $this->eventController = new EventController;
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //  Validate form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));





    }
}
