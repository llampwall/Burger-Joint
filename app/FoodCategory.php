<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    // get the actual name of the table
    protected $table = 'food_categories';

    // get all the fields we can fill
    protected $fillable = [
        'title', 'description', 'image_url',
    ];
    public function food_items() {
        return $this->hasMany('App\FoodItem', 'category_id');
    }
}
