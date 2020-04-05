<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'name' => 'Caroline Logan',
            'email' => 'cllogan22@gmail.com',
            'phone_number' => '3104448989',
            'guests' => 3,
            'time' => '6:30',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
