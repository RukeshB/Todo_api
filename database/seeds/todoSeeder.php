<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo')->insert([
            [
                'user_id'=>1,
                'title'=>'routing'
            ],
            [
                'user_id'=>1,
                'title'=>'controller'
            ],
            [
                'user_id'=>2,
                'title'=>'middelware'
            ]
        ]);
    }
}
