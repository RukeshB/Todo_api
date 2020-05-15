<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tasklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasklist')->insert([
            [
                'task'=>'introduction',
                'group_id'=>1,
                'description'=>'introduction introduction introduction introduction',
                'user_id'=>1,
            ],
            [
                'task'=>'routing',
                'group_id'=>1,
                'description'=>'routing routing routing routing',
                'user_id'=>1,
            ],
            [
                'task'=>'introduction',
                'group_id'=>2,
                'description'=>'introduction introduction introduction introduction',
                'user_id'=>2,
            ]
        ]);
    }
}
