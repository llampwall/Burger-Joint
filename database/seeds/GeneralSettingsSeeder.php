<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'JordanBurger',
            'logo_image_url' => '/img/logo.png',
            'address1' => '950 N Kings Rd',
            'address2' => 'Unit 345',
            'city' => 'West Hollywood',
            'state' => 'CA',
            'zip' => 90069,
            'phone_number' => '310-683-8968',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
