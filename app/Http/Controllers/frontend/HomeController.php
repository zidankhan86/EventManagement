<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website(){
        $events = Event::all();
        return view('frontend.pages.home',compact('events'));
    }
    public function event(){
        $events = Event::all();
        return view('frontend.pages.event',compact('events'));
    }
    public function allEvent(){
        return view('frontend.pages.allEvent');

    }
    public function college(){
        return view('frontend.pages.college');

    }
    public function collegeEvent(){
        return view('frontend.pages.collegeEvent');

    }

}
