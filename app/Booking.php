<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'idUser', 'id');
    }

    public function storage(){
        return $this->belongsTo('App\Storage', 'idStorage', 'id');
    }

    public function payment(){
        return $this->hasOne('App\Payment', 'idBooking', 
        'id');
    }

    public function specialItem(){
        return $this->hasOne('App\SpecialItem', 'idBooking', 'id');
    }
}
