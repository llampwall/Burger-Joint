<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Jordan',
            'lname' => 'Hewitt',
            'email' => 'hewitj2@gmail.com',
            'phone_number' => '3106838968',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
