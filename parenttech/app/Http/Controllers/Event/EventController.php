<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Event;

class EventController extends Controller
{
    public function displayAllEvents()
    {
        $event = Event::all();
        return view('user.home',['event' => $event]);
    }

    public function getFutureAndPastEvents()
    {
        $today = Carbon::today()->toDateString();

        $futureevents = Event::whereDate('date','>=', $today)->join('events_media','events.id','=','events_media.event_id')->limit(3)->get();
        $pastevents = Event::whereDate('date','<', $today)->limit(3)->get();

        return view('index',array('futureevents'=> $futureevents, 'pastevents'=> $pastevents));
    }
    public function getFutureEvents()
    {
        $today = date('d-m-Y');
        $futureevents = Event::whereDate('date','>=', $today)->get();
        return view('index',['futureevents'=> $futureevents], $today);
    }

    public function getPastEvents()
    {
        $today = date('d-m-Y');
        $pastevents = Event::whereDate('date','<', $today)->get();
        return view('index',['pastevents'=> $pastevents]);
    }

    public function truncate()
    {
       //\App\User::truncate();
    }

    public function getEventById($id)
    {
        $event = Event::where('id',$id)->get();
        return view('Event\event_information',['event',$event]);
    }
}
