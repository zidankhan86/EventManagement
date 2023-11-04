<?php

namespace App\Http\Controllers;

use App\Models\BuyNow;
use Illuminate\Http\Request;

class BuyNowController extends Controller
{
   public function buy(Request $request){


         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'ticket_name' => 'required',

        ]);

        // Create the event using the validated data
        BuyNow::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "ticket_name"=>$request->ticket_name,


        ]);
        return redirect()->back()->with('success','Ticket Confirmed');


   }
}
