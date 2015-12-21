<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->truncate();

        DB::table('projects')->insert([
            'user_id'=>1,
            'title'=>'Project 1',
            'description'=>'Seeded project',
            's3_slug'=>'',
            's3_token'=>''
        ]);


    }
}
