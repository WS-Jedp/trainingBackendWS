<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventsRatings extends Model
{
    use HasFactory;
    public function attendeesE (){
        return $this->belongsTo(attendees::class, 'attendees_id','id');
    }
}
