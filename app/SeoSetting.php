<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    // get the actual name of the table
    protected $table = 'seo_settings';

    // get all the fields we can fill
    protected $fillable = [
        'description', 'keywords'
    ];
}
