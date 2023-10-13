<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
  public function EventCategoryForm(){
    return view('backend.pages.eventCategoryForm');
  }

  public function EventCategoryMappingForm(){
    return view('backend.pages.eventCategoryMappingForm');
  }
}
