<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    // get all the fields we can fill
    protected $fillable = [
        'name', 'email', 'phone_number', 'guests', 'time',
    ];
}