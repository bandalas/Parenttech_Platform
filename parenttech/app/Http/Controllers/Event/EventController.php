<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Event;

class EventController extends Controller
{

    public function create()
    {
        return view('admin.form-holder');
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'hour' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $event = new Event();
        $event->name = $request->get('name');
        $event->date = Carbon::parse($request->get('date'))->toDateString();
        $event->hour = $request->get('hour');
        $event->location = $request->get('location');
        $event->price = $request->get('price');
        $event->description = $request->get('description');
        $event->save();
        return redirect(route('admin.dashboard'));
    }


    public function displayAllEvents()
    {
        $event = Event::all();
        return view('user.home',['event' => $event]);
    }

    public function getFutureAndPastEvents()
    {
        $today = Carbon::today()->toDateString();
        \Log::warning($today);
        $rip = Event::select('date')->where('id',2)->get();
        \Log::warning($rip);
        $futureevents = Event::whereDate('date','>=', $today)->join('events_media','events.id','=','events_media.event_id')->limit(3)->get();
        $pastevents = Event::whereDate('date','<', $today)->limit(3)->get();
        \Log::error($futureevents);
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
       \App\Event::truncate();
    }

    public function getEventById($id)
    {
        $event = Event::where('id',$id)->get();
        return view('Event\event_information',['event',$event]);
    }


}
