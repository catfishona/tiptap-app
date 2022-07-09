<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    public function booking(){
        return $this->hasOne('App\Booking', 'idStorage', 'id');
    }    
}
