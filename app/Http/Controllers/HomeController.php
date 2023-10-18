<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $totalEvents = Event::count();
        $totalUsers = User::count();
        return view('admin.pages.dashboard.dashboard',compact('totalEvents','totalUsers'));
    }
}
