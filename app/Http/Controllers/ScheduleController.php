<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function scheduleForm(){
        return view('backend.pages.schedulForm');
    }
}
