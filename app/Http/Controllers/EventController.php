<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\EventOrganizer;
use App\Models\EventPromotion;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Schedule;
use App\Models\Ticket;
use App\Models\User;
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
         $request->validate([
            'event_name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required',
            'registration_deadline' => 'required',
            'is_published' => 'required|in:0,1',
        ]);
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('uploads', $imageName, 'public');

        // Create the event using the validated data
        $event = Event::create([
            "event_name"=>$request->event_name,
            "category_id"=>$request->category_id,
            "description"=>$request->description,
            "start_date"=>$request->start_date,
            "end_date"=>$request->end_date,
            "location"=>$request->location,
            "registration_deadline"=>$request->registration_deadline,
            "is_published"=>$request->is_published,
            "image"=>$imageName

        ]);

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

public function mappingList(){
    return view('backend.pages.mappingList');

}
public function EventList(){
    $events = Event::all();
    return view('backend.pages.eventList',compact('events'));
}

public function ScheduleList(){
    $schedules = Schedule::all();
    $events = Event::with('EventSchedule')->where('event_name');
    return view('backend.pages.scheduleList',compact('schedules','events'));
}

public function eventPromotionList(){

    $promotions = EventPromotion::all();
    $events = Event::with('EventPromotion')->where('event_name');
    return view('backend.pages.eventPromotionList',compact('promotions'));

}

public function ticketList(){
    $tickets = Ticket::all();
    $event = Event::with('EventTicket')->where('event_name');
    return view('backend.pages.ticketList',compact('tickets'));

}

public function userList(){
    $users= User::all();
    return view('backend.pages.userList',compact('users'));

}

public function eventOrganistionList(){
    $organizer = EventOrganizer::all();
    User::with('user')->where('name');
    Event::with('EventsOrganizer')->where('event_name');
    return view('backend.pages.eventOrganistionList',compact('organizer'));

}

public function attendeeList(){
    $attendee = Attendee::all();
    return view('backend.pages.attendeeList',compact('attendee'));

}

public function contactInfoList(){
    return view('backend.pages.contactInfoList');

}

public function permissionList(){
    $permissions = Permission::all();
    return view('backend.pages.permissionList',compact('permissions'));

}

public function usersRoleList(){
    $roles = Role::all();
    User::with('user')->where('name');
    User::with('Permission')->where('type');
    return view('backend.pages.usersRoleList',compact('roles'));

}
}
