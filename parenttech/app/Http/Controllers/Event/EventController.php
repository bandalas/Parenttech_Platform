<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    //

    public function displayAllEvents(){
        $event = Event::all();
        return view('user.home',['event' => $event]);
    }
}
