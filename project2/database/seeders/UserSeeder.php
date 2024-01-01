<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mizanur Rahman',
            'email' => 'mizanur1326@gmail.com',
            'password' => Hash::make('123'),
            'role' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Mehedi Hassan',
            'email' => 'shuvo@gmail.com',
            'password' => Hash::make('123'),
            'role' => '2'
        ]);
        DB::table('users')->insert([
            'name' => 'Ikbal Hossain',
            'email' => 'ikbal@gmail.com',
            'password' => Hash::make('123'),
            'role' => '3'
        ]);
    }
}
