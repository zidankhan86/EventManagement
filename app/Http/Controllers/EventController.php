<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class EventController extends Controller
{
  public function EventForm(){
    $categories = EventCategory::all();
    return view('backend.pages.eventForm',compact('categories'));
  }

  public function EventCreate(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'event_name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required',
            'registration_deadline' => 'required',
            'is_published' => 'required|in:0,1',
        ]);

        // Create the event using the validated data
        $event = Event::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Event created successfully!',
            'event' => $event,
        ], 201);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong',
            'error' => $e->getMessage(), //Optional
        ], 500); // Use 500 status code for server error
    }
}

public function EventList(){
    return view('backend.pages.eventList');
}
}
