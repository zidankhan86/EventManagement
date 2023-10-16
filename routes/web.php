<?php

use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventOrganizerController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
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


//Frontend

Route::get('/',[FrontendHomeController::class,'website']);
//Auth
Route::get('/registration',[AuthController::class,'registration']);
Route::post('/register',[AuthController::class,'register']);
//pages
Route::get('/app',[HomeController::class,'home']);
Route::get('/event-from',[EventController::class,'EventForm']);
Route::get('/ticket-from',[TicketController::class,'TicketForm']);
Route::get('/eventCategory/from',[EventCategoryController::class,'EventCategoryForm']);
Route::get('/eventCategory/mapping/form',[EventCategoryController::class,'EventCategoryMappingForm']);
Route::get('/event-organizer-from',[EventOrganizerController::class,'EventOranizerForm']);
Route::get('/event-promotion-from',[EventOrganizerController::class,'EventPromotionForm']);
Route::get('/schedule-from',[ScheduleController::class,'scheduleForm']);
Route::get('/attendee-from',[AttendeeController::class,'attendeeForm']);
Route::get('/user-from',[UserController::class,'userForm']);
Route::get('/user-role-form',[RoleController::class,'userRoleForm']);
Route::get('/permission-form',[PermissionController::class,'permissionForm']);
//Lists
Route::get('/mapping-list',[EventController::class,'mappingList']);
Route::get('/event-list',[EventController::class,'EventList']);
Route::get('/schedule-list',[EventController::class,'ScheduleList']);
Route::get('/eventPromotion-list',[EventController::class,'eventPromotionList']);
Route::get('/ticket-list',[EventController::class,'ticketList']);
Route::get('/user-list',[EventController::class,'userList']);
Route::get('/eventOrganistion-list',[EventController::class,'eventOrganistionList']);
Route::get('/attendee-list',[EventController::class,'attendeeList']);
Route::get('/contactInfo-list',[EventController::class,'contactInfoList']);
Route::get('/permission-list',[EventController::class,'permissionList']);
Route::get('/usersRole-list',[EventController::class,'usersRoleList']);

//Post Method
Route::post('/eventCategory/create',[EventCategoryController::class,'EventCategoryCreate']);
Route::post('/event-create',[EventController::class,'EventCreate']);
Route::post('/eventCategory/mapping/store',[EventCategoryController::class,'EventCategoryMappingStore']);
Route::post('/event-promotion-store',[EventOrganizerController::class,'EventPromotionStore']);
Route::post('/schedule-create',[ScheduleController::class,'scheduleCreate']);
Route::post('/permission-create',[PermissionController::class,'permissionCreate']);
Route::post('/ticket-store',[TicketController::class,'TicketStore']);
Route::post('/attendee-store',[AttendeeController::class,'AttendeeStore']);
Route::post('/user-role-store',[RoleController::class,'userRoleStore']);
