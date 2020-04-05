<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    // get all the fields we can fill
    protected $fillable = [
        'fname', 'lname', 'email', 'phone_number',
    ];
}
