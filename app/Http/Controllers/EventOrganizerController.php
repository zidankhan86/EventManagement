<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventOrganizer;
use App\Models\EventPromotion;
use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function EventOranizerForm(){
        return view('backend.pages.eventOrganizerForm');
    }

    //Event Promotion
    public function EventPromotionForm(){
        $events = Event::all();
        return view('backend.pages.eventPromotion',compact('events'));
    }

    public function EventPromotionStore(Request $request){
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'event_id' => 'required',
                'type' => 'required',
                'message' => 'required',
                'date' => 'required',
            ]);

            // Create the category mapping using the validated data
            $Organizer = EventPromotion::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Promotion mapping created successfully!',

            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',

            ], 500); // Use the 500 status code for a server error
        }
    }

}
