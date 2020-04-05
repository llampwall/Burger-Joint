<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Fresh ground chuck burger with lettuce, tomato, cheese, onions, and our special BBQ sauce!',
            'image_url' => '/img/burger.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Monster Nachos',
            'description' => 'Delicious tortilla chips piled high with beef, guacamole, pico de gallo, and tons of cheese!',
            'image_url' => '/img/nachos.png',
            'price' => 12.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
