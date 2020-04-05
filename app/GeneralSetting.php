<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    // get the actual name of the table
    protected $table = 'general_settings';

    // get all the fields we can fill
    protected $fillable = [
        'site_title', 'logo_image_url', 'address1', 'address2', 'city', 'state', 'zip', 'phone_number'
    ];
}
