<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Event\EventController;

class HomeController extends Controller
{
    protected $eventController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->eventController = new EventController;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $future = $this->eventController->getFutureEvents();
        return view('home',['data' => $future]);
    }
}
