<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventOrganizerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//pages
Route::get('/',[HomeController::class,'home']);
Route::get('/event-from',[EventController::class,'EventForm']);
Route::get('/ticket-from',[TicketController::class,'TicketForm']);
Route::get('/eventCategory/from',[EventCategoryController::class,'EventCategoryForm']);
Route::get('/eventCategory/mapping/form',[EventCategoryController::class,'EventCategoryMappingForm']);
Route::get('/event-organizer-from',[EventOrganizerController::class,'EventOranizerForm']);
Route::get('/event-promotion-from',[EventOrganizerController::class,'EventPromotionForm']);
Route::get('/schedule-from',[ScheduleController::class,'scheduleForm']);
Route::get('/attendee-from',[AttendeeController::class,'attendeeForm']);
Route::get('/user-from',[UserController::class,'userForm']);

//Lists

//Post Method
Route::post('/eventCategory/create',[EventCategoryController::class,'EventCategoryCreate']);
Route::post('/event-create',[EventController::class,'EventCreate']);
