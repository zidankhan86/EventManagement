<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.pages.dashboard.dashboard');
    }


    public function website(){
        return view('frontend.pages.home');
    }
}
