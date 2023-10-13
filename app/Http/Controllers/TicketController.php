<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
 public function TicketForm(){
    return view('backend\pages\ticketFrom');
 }
}
