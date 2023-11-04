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

    public function TicketEdit($id){
        $tickets = Ticket::find($id);
        $events = Event::all();
        return view('backend.pages.edit.ticketEdit',compact('tickets','events'));
    }

    public function TicketUpdate(Request $request ,$id){
        $tickets = Ticket::find($id);

        try {

            $tickets->update([
                'event_id' =>$request->event_id,
                'ticket_name' =>$request->ticket_name,
                'price' =>$request->price,
                'quantity' =>$request->quantity
            ]);

            return response()->json(['message' => 'Ticket Updates successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ticket creation failed. Please try again.'], 500);
        }


    }

    public function ticket(){

        $tickets = Ticket::all();
        Event::with('EventTicket')->where('event_name');

        return view('frontend.pages.ticket',compact('tickets'));
    }

}
