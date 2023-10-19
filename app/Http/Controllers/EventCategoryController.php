<?php

namespace App\Http\Controllers;

use App\Models\CategoryMapping;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
  public function EventCategoryForm(){
    return view('backend.pages.eventCategoryForm');
  }

  public function EventCategoryMappingForm(){
    $events = Event::all();
    $categories = EventCategory::all();
    return view('backend.pages.eventCategoryMappingForm',compact('events','categories'));
  }


  public function EventCategoryCreate(Request $request)
  {
      try {

          EventCategory::create([
              "category_name" => $request->category_name
          ]);

          // Return a success response
          return response()->json([
              'status' => 'success',
              'message' => 'Category created successfully'
          ], 201); // 201 indicates "Created" status

      } catch (\Exception $e) {
          // Handle any errors or exceptions
          return response()->json([
              'status' => 'error',
              'message' => 'Failed to create category'
          ], 400); // 400 indicates "Bad Request" status
      }
  }

  public function EventCategoryMappingStore(Request $request){
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'event_id' => 'required',
            'category_id' => 'required',
        ]);

        // Create the category mapping using the validated data
        $categoryMapping = CategoryMapping::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Category mapping created successfully!',
            'category_mapping' => $categoryMapping, // Return the correct object
        ], 201);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong',
            'error' => $e->getMessage(), // Optional
        ], 500); // Use the 500 status code for a server error
    }
}

public function categoryList(){
    $categories =EventCategory::all();
    return view('backend.pages.categoryList',compact('categories'));
}

public function EventCategoryEdit($id){
    $edit = EventCategory::find($id);
    return view('backend.components.edit.categoryEdit',compact('edit'));
}

public function EventCategoryUpdate(Request $request, $id){
    $eventCategory = EventCategory::find($id);

    try {

        $eventCategory->update([
            "category_name" => $request->category_name
        ]);

        // Return a success response
        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully'
        ], 201); // 201 indicates "Created" status

    } catch (\Exception $e) {
        // Handle any errors or exceptions
        return response()->json([
            'status' => 'error',
            'message' => 'Failed to create category'
        ], 400); // 400 indicates "Bad Request" status
    }

}

}

