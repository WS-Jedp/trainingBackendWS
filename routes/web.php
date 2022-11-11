<?php

use App\Models\attendees;
use App\Models\channels;
use App\Models\event_tickets;
use App\Models\events;
use App\Models\eventsRatings;
use App\Models\organizers;
use App\Models\registrations;
use App\Models\rooms;
use App\Models\session_registrations;
use App\Models\sessions;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("attendees", function () {
    $attendees = attendees::where('id', 5)->get()->first()->comments;
    return response()->json($attendees) ;
});
Route::get("organizers", function () {
    $organizers = organizers::all();
    return response()->json($organizers) ;
});

Route::get("events", function () {
    $events = events::all();
    return response()->json($events) ;
});

Route::get("event_tickets", function () {
    $event_tickets = event_tickets::all();
    return response()->json($event_tickets) ;
});

Route::get("channels", function () {
    $channels = channels::all();
    return response()->json($channels) ;
});

Route::get("rooms", function () {
    $rooms = rooms::all();
    return response()->json($rooms) ;
});

Route::get("sessions", function () {
    $sessions = sessions::all();
    return response()->json($sessions) ;
});

Route::get("registrations", function () {
    $registrations = registrations::all();
    return response()->json($registrations) ;
});

Route::get("session_registrations", function () {
    $session_registrations = session_registrations::all();
    return response()->json($session_registrations) ;
});

Route::get("eventsRatings", function () {
    $eventsRatings= eventsRatings::find(1)->attendees;
    return response()->json($eventsRatings) ;
});

Route::get('/', function () {
    return view('welcome');
});
