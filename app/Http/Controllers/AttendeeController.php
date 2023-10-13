<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function attendeeForm(){
        return view('backend.pages.attendeeFrom');
    }
}
