<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function scheduleForm(){

        $events = Event::all();
        return view('backend.pages.schedulForm',compact('events'));
    }
    public function scheduleCreate(Request $request){

        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'event_id' => 'required',
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'time' => 'required',
            ]);

            // Create the category mapping using the validated data
            $schedule = Schedule::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Schedule created successfully!',

            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong',

            ], 500); // Use the 500 status code for a server error
        }
    }


}
