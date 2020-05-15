<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class taskgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taskgroup')->insert([
            [
                'title'=>'Laravel',
                'due_date'=>'2020-05-31'
            ],
            [
                'title'=>'Java',
                'due_date'=>'2020-06-15'
            ]
        ]);
    }
}
