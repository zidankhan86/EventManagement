<?php

use App\Models\EventCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BuyNowController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventOrganizerController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

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
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


//Frontend

Route::get('/',[FrontendHomeController::class,'website'])->name('website');
Route::get('/event-page',[FrontendHomeController::class,'event'])->name('event');
Route::get('/allEvent-page',[FrontendHomeController::class,'allEvent']);
Route::get('/college-page',[FrontendHomeController::class,'college']);
Route::get('/collegeEvent-page',[FrontendHomeController::class,'collegeEvent']);
Route::get('/schedule',[FrontendHomeController::class,'schedule'])->name('schedule');
Route::get('/category',[EventCategoryController::class,'category'])->name('category');
Route::get('/details/{id}',[EventController::class,'details'])->name('details');
//Auth
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login-process',[AuthController::class,'loginProcess']);
Route::get('/logout',[AuthController::class,'logout']);
//Profile frontend
Route::get('/profile',[AuthController::class,'profile']);
//Backend
Route::group(['middleware'=>'auth'],function(){
//pages
Route::get('/app',[HomeController::class,'home'])->name('dashboard');
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
Route::get('/category-list',[EventCategoryController::class,'categoryList']);
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
Route::post('/organizer-store',[EventOrganizerController::class,'organizerStore']);


//Edit
Route::get('/eventCategory/edit/{id}',[EventCategoryController::class,'EventCategoryEdit']);
Route::get('/ticket/edit/{id}',[TicketController::class,'TicketEdit']);
Route::get('/event/edit/{id}',[EventController::class,'EventEdit']);
Route::get('/eventOrganizer/edit/{id}',[EventOrganizerController::class,'EventOrganizerEdit']);
Route::get('/attendee/edit/{id}',[AttendeeController::class,'attendeeEdit']);

//Update
Route::post('/eventCategory/{id}',[EventCategoryController::class,'EventCategoryUpdate']);
Route::post('/ticket-update/{id}',[TicketController::class,'TicketUpdate']);

Route::get('/ticket',[TicketController::class,'ticket'])->name('ticket');
Route::post('/buy',[BuyNowController::class,'buy'])->name('buy');
});


