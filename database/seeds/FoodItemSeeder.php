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
            'title' => 'Bacon Cheeseburger',
            'description' => 'Hardwood-smoked bacon, lettuce, tomatoes, mayo and choice of cheese.',
            'image_url' => '/img/burger.png',
            'price' => 8.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Whiskey River BBQ',
            'description' => 'Whiskey River BBQ Sauce, crispy onion straws, Cheddar, lettuce, tomatoes and mayo.',
            'image_url' => '/img/burger.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Royal Burger',
            'description' => 'Hardwood-smoked bacon, egg*, American cheese, lettuce, tomatoes and mayo.',
            'image_url' => '/img/burger.png',
            'price' => 11.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Banzai Burger',
            'description' => 'Teriyaki-glazed patty, grilled pineapple, Cheddar, lettuce, tomatoes and mayo.',
            'image_url' => '/img/burger.png',
            'price' => 13.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => "Burnin' Burger",
            'description' => 'Fried jalapeño coins, house-made salsa, Pepper-Jack, lettuce, tomatoes and chipotle aioli on a sesame bun.',
            'image_url' => '/img/burger.png',
            'price' => 12.99,
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

        DB::table('food_items')->insert([
            'title' => 'Steak & Fries',
            'description' => 'Juicy NY Strip Steak served with au jus and next to a pile of fresh cut french fries.',
            'image_url' => '/img/entrees.png',
            'price' => 17.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'House Salad',
            'description' => 'Tomatoes, cucumber, avocado, and feta on a bed of romaine lettuce and drizzled with Italian dressing.',
            'image_url' => '/img/salad.png',
            'price' => 8.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chocolate Cake',
            'description' => 'The richest, dreamiest, chocolatiest chocolate cake with chocolate icing, served with vanilla ice cream.',
            'image_url' => '/img/dessert.png',
            'price' => 7.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
