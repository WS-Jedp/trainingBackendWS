<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendees extends Model
{
    use HasFactory;
    protected $table = "attendees";
    public function comments(){
        return $this->hasMany(eventsRatings::class,'attendees_id', 'id');
    }
}
