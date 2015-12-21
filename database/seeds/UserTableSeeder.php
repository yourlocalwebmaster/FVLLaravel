<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            "id"=>1,
            "name"=>"Grant Kimball",
            "email"=>"uturnweb@gmail.com",
            "password"=>bcrypt("PassW0rd!")
        ]);
    }
}
