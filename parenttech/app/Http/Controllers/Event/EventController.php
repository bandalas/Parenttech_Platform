<?php

namespace App\Http\Controllers\Event;

use App\EventMedia;
use App\Http\Controllers\AdminController;
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
        return redirect(route('events-media.create'))->with('id', $event->id);

    }

    public function show($id){

        $event = Event::where('id',$id)->first();
        $media = EventMedia::where('event_id',$id)->first();
        return view('event.event_information',array('event' => $event, 'media' => $media));
    }

    public function destroy($id){
        $adminCont = new AdminController;
        $media = EventMedia::where('event_id',$id);
        $media->delete();
        $event = Event::find($id)->delete();
        return $adminCont->index();
    }

    public function displayAllEvents()
    {
        $event = Event::all();
        return view('user.home',['event' => $event]);
    }

    public function getFutureAndPastEvents()
    {
        $today = Carbon::today()->toDateString();
        $futureevents = Event::whereDate('date','>=', $today)->limit(3)->get();
        $pastevents = Event::whereDate('date','<', $today)->limit(3)->get();
        return view('index',array('futureevents'=> $futureevents, 'pastevents'=> $pastevents));
    }
    public function getFutureEvents()
    {
        $today = Carbon::today()->toDateString();
        $futureevents = Event::whereDate('date','>=', $today)->join('events_media','events.id','=','events_media.event_id')->get();
        \Log::error($futureevents);
        return $futureevents;
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
