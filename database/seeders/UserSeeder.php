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
            [
                "username" => "haimiy",
                "email" => "khairat096@gmail.com",
                "role_id" => 1,
                "password" => Hash::make(1234)
            ],
            [
                "username" => "madaboy",
                "email" => "madaboy@gmail.com",
                "role_id" => 2,
                "password" => Hash::make(1234)
            ],
            [
                "username" => "ali",
                "email" => "amimuz77@gmail.com",
                "role_id" => 3,
                "password" => Hash::make(1234)
            ],
        ]);

        DB::table('vendors')->insert([
            'user_id' => 2,
        ]);
    }
}
