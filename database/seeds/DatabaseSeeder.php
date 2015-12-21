<?php

use Illuminate\Database\Seeder;
use database\seeds\UserTableSeeder;
use database\seeds\ProjectTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
    }
}
