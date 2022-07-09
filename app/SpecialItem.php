<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialItem extends Model
{
    public function booking(){
        return $this->belongsTo('App/Booking', 'idBooking', 'id');
    }
}
