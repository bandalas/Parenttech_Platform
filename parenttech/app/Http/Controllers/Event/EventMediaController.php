<?php

namespace App\Http\Controllers\Event;

use App\EventMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class EventMediaController extends Controller
{
    //
    public function create()
    {
        $id = session()->get( 'id' );
        return view('admin.form2-holder')->with('id',$id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
            'shopify_link' => 'required',
        ]);
        $media = new EventMedia();
        $media->event_id = $request->id;
        $media->thumbnail = $request->thumbnail;
        $media->img1 = $request->img1;
        $media->img2 = $request->img2;
        $media->img3 = $request->img3;
        $media->shopify_link = $request->shopify_link;
        $media->save();
    }

    public static function itHasNoId(){
        //TODO: Pretty
        //TODO: User view
        return view('admin.error');
    }


}
