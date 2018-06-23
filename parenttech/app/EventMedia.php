<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventMedia extends Model
{
    //
    protected $fillable = [
        'thumbnail',
        'img1',
        'img2',
        'img3',
        'shopify_link',
    ];
}
