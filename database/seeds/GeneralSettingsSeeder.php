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
            'address1' => '7009 Sunset Blvd',
            'address2' => null,
            'city' => 'Los Angeles',
            'state' => 'CA',
            'zip' => 90028,
            'phone_number' => '(800) 786-1000',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
