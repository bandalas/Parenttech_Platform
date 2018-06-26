<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class UserController extends Controller
{
    public function homeEvents()
    {
        \Log::warning('its in homeEvents');
        echo ('jo');

    }
}
