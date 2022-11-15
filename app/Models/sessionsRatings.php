<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sessionsRatings extends Model
{
    use HasFactory;
    public function attendeesS (){
        return $this->belongsTo(attendees::class, 'attendees_id','id');
    }
}
