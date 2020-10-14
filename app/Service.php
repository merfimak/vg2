<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   protected $fillable = [
        'Light_drone_pakiet_old_price', 'Light_drone_pakiet_new_price', 'FPV_Drone_Pakiet_old_price','FPV_Drone_Pakiet_new_price', 'pakiet_360_old_price', 'pakiet_360_new_price'
    ];

     //protected $table = 'my_flights';
}
