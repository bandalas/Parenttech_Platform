<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $fillable = [
        'name',
        'date',
        'hour',
        'location',
        'price',
        'description'
    ];

    public function eventMedia()
    {
        return $this->hasOne('App\EventMedia');
    }
}
