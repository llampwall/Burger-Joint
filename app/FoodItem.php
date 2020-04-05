<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    // get the actual name of the table
    protected $table = 'food_items';

    // get all the fields we can fill
    protected $fillable = [
        'title', 'description', 'image_url', 'price', 'category_id'
    ];
    public function categories() {
        return $this.belongsTo('App\FoodCategory');
    } 
}
