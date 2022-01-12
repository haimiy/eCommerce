<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                "name" => "Small",
                "size" => "S",
            ],
            [
                "name" => "Medium",
                "size" => "M",
            ],
            [
                "name" => "Large",
                "size" => "L",
            ],
            [
                "name" => "Extra Large",
                "size" => "XL",
            ],
        ]);
        DB::table('colors')->insert([
            [
                "name" => "Green",
                "color" => "#28a745",
            ],
            [
                "name" => "Pink",
                "color" => "#a8295c",
            ],
            [
                "name" => "Black",
                "color" => "#121212",
            ],
        ]);
    }
}
