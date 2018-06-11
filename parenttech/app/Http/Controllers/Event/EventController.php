<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    //

    public function displayAllEvents(){
        //$posts = Post::all();
        $event = Event::all();
        //$event = DB::table('events')->get();
        return view('user.home',['event' => $event]);
    }
}
