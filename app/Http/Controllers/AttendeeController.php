<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    public function attendeeForm(){

        $events = Event::all();
        $users = User::all();
        return view('backend.pages.attendeeFrom',compact('events','users'));
    }

    public function AttendeeStore(Request $request){
        try {
            $data = $request->validate([
                'event_id' => 'required',
                'user_id' => 'required',
                'date' => 'required',
                'status' => 'required',
            ]);

            Attendee::create($data);

            return response()->json(['message' => 'Attendee created successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Attendee creation failed. Please try again.']);
        }
    }

}
