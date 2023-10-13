<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function EventOranizerForm(){
        return view('backend.pages.eventOrganizerForm');
    }
}
