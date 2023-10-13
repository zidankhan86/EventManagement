<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function EventOranizerForm(){
        return view('backend.pages.eventOrganizerForm');
    }

    //Event Promotion
    public function EventPromotionForm(){
        return view('backend.pages.eventPromotion');
    }
}
