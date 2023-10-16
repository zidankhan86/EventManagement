<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
 public function TicketForm(){
    $events = Event::all();
    return view('backend\pages\ticketFrom',compact('events'));
 }

 public function TicketStore(Request $request){
    try {
        $validatedData = $request->validate([
            'event_id' => 'required|exists:events,id',
            'ticket_name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Ticket::create($validatedData);

        return response()->json(['message' => 'Ticket created successfully'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Ticket creation failed. Please try again.'], 500);
    }
 }
}
