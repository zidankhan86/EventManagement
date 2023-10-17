<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website(){
        return view('frontend.pages.home');
    }
    public function event(){
        return view('frontend.pages.events');
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
