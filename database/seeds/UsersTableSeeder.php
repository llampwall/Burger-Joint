<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Jordan',
            'lname' => 'Hewitt',
            'email' => 'hewitj2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'fname' => 'Caroline',
            'lname' => 'Logan',
            'email' => 'cllogan2@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
