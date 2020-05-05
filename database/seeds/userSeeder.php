<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'Ram',
                'email'=>'ram@gmail.com',
                'password'=>Hash::make('123456789')
            ],
            [
                'name'=>'shyam',
                'email'=>'shyam@gmail.com',
                'password'=>Hash::make('123456789')
            ]
        ]);
    }
}
