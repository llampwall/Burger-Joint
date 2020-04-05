<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'JordanBurger has been delivering delicious burgers with the highest quality ingredients for over two months.',
            'keywords' => 'Jordan, burger, burgers, delicious, juicy, quality, beef, cheese, restaurant',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
