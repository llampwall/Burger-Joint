<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialSetting extends Model
{
    // get the actual name of the table
    protected $table = 'social_settings';

    // get all the fields we can fill
    protected $fillable = [
        'facebook_url', 'twitter_url', 'instagram_url'
    ];
}
