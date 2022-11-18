<?php

namespace App\Http\Controllers;

use App\Models\event_tickets;
use Illuminate\Http\Request;
// use App\Models\event_tickets;

class ticketControl extends Controller
{
    public function allTicket (){
        $tickets = event_tickets::all();
        return response()->view( "Tickets.tickets", [
            "tickets"=>$tickets
        ]);
    }
    public function save(Request $request){
        return response()->json($request->input('name'));
    }
}
