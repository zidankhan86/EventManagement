<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
  public function EventCategoryForm(){
    return view('backend.pages.eventCategoryForm');
  }

  public function EventCategoryMappingForm(){
    return view('backend.pages.eventCategoryMappingForm');
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
}
