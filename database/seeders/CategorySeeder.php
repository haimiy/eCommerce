<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('major_categories')->insert([
            [
                "main_category_name" => "Computers and Laptop",
                "description" => " ",
                "picture" => "1.png"
            ],
            [
                "main_category_name" => "Digital Cameras",
                "description" => " ",
                "picture" => "2.png"
            ],
            [
                "main_category_name" => "Tablets & Cell phones",
                "description" => " ",
                "picture" => "3.png"
            ],
            [
                "main_category_name" => "Televisions",
                "description" => " ",
                "picture" => "4.png"     
            ],
            [
                "main_category_name" => "Audio",
                "description" => " ",
                "picture" => "5.png"     
            ],
            [
                "main_category_name" => "Smart Watches",
                "description" => " ",
                "picture" => "6.png"     
            ],
            [
                "main_category_name" => "Jumpers",
                "description" => " ",
                "picture" => "7.jpg"     
            ],
           
        ]);

        DB::table('minor_categories')->insert([
            [
                "sub_category_name" => "Laptops",
                "description" => " ",
                "major_category_id" => 1
            ],
            [
                "sub_category_name" => "Audio",
                "description" => " ",
                "major_category_id" => 5
            ],
            [
                "sub_category_name" => " Cameras",
                "description" => " ",
                "major_category_id" => 2
            ],
            [
                "sub_category_name" => "Iphone",
                "description" => " ",
                "major_category_id" => 3
            ],
            [
                "sub_category_name" => "Tablet",
                "description" => " ",
                "major_category_id" => 3
            ],
            [
                "sub_category_name" => "Cell phone",
                "description" => " ",
                "major_category_id" => 3
            ],
            [
                "sub_category_name" => "TV",
                "description" => " ",
                "major_category_id" => 4
            ],
            [
                "sub_category_name" => "Jampers",
                "description" => " ",
                "major_category_id" => 7
            ],
            [
                "sub_category_name" => "Watch",
                "description" => " ",
                "major_category_id" => 6
            ],
        ]);
    }
}
