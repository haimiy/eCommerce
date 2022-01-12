<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "product_name" => "MacBook Pro 13 Display, i5",
                "description" => " ",
                "minor_category_id" => 1,
            ],
            [
                "product_name" => "Bose - SoundLink Bluetooth Speaker",
                "description" => " ",
                "minor_category_id" => 2
            ],
            [
                "product_name" => " Apple - 11 Inch iPad Pro  with Wi-Fi 256GB",
                "description" => " ",
                "minor_category_id" => 5
            ],
            [
                "product_name" => "Google - Pixel 3 XL  128GB",
                "description" => " ",
                "minor_category_id" => 6
            ],
            [
                "product_name" => "Samsung - 55 Class  LED 2160p Smart",
                "description" => " ",
                "minor_category_id" => 7
            ],
            [
                "product_name" => "Brown paperbag waist",
                "description" => " ",
                "minor_category_id" => 8
            ],
            [
                "product_name" => "Watch",
                "description" => " ",
                "minor_category_id" => 9
            ],
            [
                "product_name" => "iphone",
                "description" => " ",
                "minor_category_id" => 4
            ],
            [
                "product_name" => "camera",
                "description" => " ",
                "minor_category_id" => 3
            ],
           
        ]);
        DB::table('product_details')->insert([
            [
                "quantity" => 10,
                "price" => 250000.00,
                "discount" => 100.00,
                "product_id" => 1
            ],
            [
                "quantity" => 20,
                "price" => 500000.00,
                "discount" => 200.00,
                "product_id" => 2
            ],
            [
                "quantity" => 11,
                "price" => 250000.00,
                "discount" => 1000.00,
                "product_id" => 3
            ],
            [
                "quantity" => 9,
                "price" => 100000.00,
                "discount" => 90.00,
                "product_id" => 4
            ],
            [
                "quantity" => 4,
                "price" => 160000.00,
                "discount" => 100.00,
                "product_id" => 5
            ],
            [
                "quantity" => 2,
                "price" => 9000.00,
                "discount" => 0.00,
                "product_id" => 6
            ],
            [
                "quantity" => 2,
                "price" => 30000.00,
                "discount" => 900.00,
                "product_id" => 7
            ],
            [
                "quantity" => 9,
                "price" => 60000,
                "discount" => 100.00,
                "product_id" => 8
            ],
            [
                "quantity" => 7,
                "price" => 50000.00,
                "discount" => 100.00,
                "product_id" => 9
            ],
        ]);
        DB::table('product_images')->insert([
            [
                "product_images" => "product-1.jpg",
                "product_id" => 1,
            ],
            [
                "product_images" => "1.jpg",
                "product_id" => 1,
            ],
            [
                "product_images" => "product-13.jpg",
                "product_id" => 1,
            ],
            [
                "product_images" => "product-2.jpg",
                "product_id" => 2,
            ],
            [
                "product_images" => "product-3.jpg",
                "product_id" => 3,
            ],
            [
                "product_images" => "product-4.jpg",
                "product_id" => 3,
            ],
            [
                "product_images" => "product-5.jpg",
                "product_id" => 5,
            ],
            [
                "product_images" => "nguo.jpg",
                "product_id" => 6,
            ],
            [
                "product_images" => "product-8.jpg",
                "product_id" => 7,
            ],
            [
                "product_images" => "product-12.jpg",
                "product_id" => 9,
            ],
            [
                "product_images" => "product-12-2.jpg",
                "product_id" => 9,
            ],
            [
                "product_images" => "4.jpg",
                "product_id" => 3,
            ],
            [
                "product_images" => "4.jpg",
                "product_id" => 8,
            ],
            [
                "product_images" => "product-7.jpg",
                "product_id" => 3,
            ],
            [
                "product_images" => "product-14.jpg",
                "product_id" => 3,
            ],
        ]);

        DB::table('product_sizes')->insert([
            [
                "size_id" => 1,
                "product_id" => 1,
            ],
            [
                "size_id" => 1,
                "product_id" => 2,
            ],
            [
                "size_id" => 2,
                "product_id" => 3,
            ],
            [
                "size_id" => 2,
                "product_id" => 4,
            ],
            [
                "size_id" => 3,
                "product_id" => 5,
            ],
            [
                "size_id" => 3,
                "product_id" => 6,
            ],
            [    
                "size_id" => 4,
                "product_id" => 7,
            ],
            [
                "size_id" => 4,
                "product_id" => 8,
            ],
            [
                "size_id" => 2,
                "product_id" => 9,
            ],
            [
                "size_id" => 3,
                "product_id" => 9,
            ],
            [
                "size_id" => 4,
                "product_id" => 9,
            ]
        ]);

        DB::table('product_colors')->insert([
            [
                "color_id" => 1,
                "product_id" => 1,
            ],
            [
                "color_id" => 2,
                "product_id" => 1,
            ],
            [
                "color_id" => 3,
                "product_id" => 2,
            ],
            [
                "color_id" => 1,
                "product_id" => 3,
            ],
            [
                "color_id" => 2,
                "product_id" => 4,
            ],
            [
                "color_id" => 3,
                "product_id" => 2,
            ],
        ]);
        
        DB::table('deals_and_promotions')->insert([
            [
                "product_name" =>"Beats by" ,
                "specification" =>"Dre Studio 3" ,
                "price" => 3499500.00,
                "discount" => 240000.00,
                'picture' => "slide-1.png",
                'status' =>"Deals and Promotions"
            ],
            [
                "product_name" =>"Apple iPad Pro" ,
                "specification" =>"12.9 Inch, 64GB " ,
                "price" => 8499500.00,
                "discount" => 500000.00,
                'picture' => "slide-2.png",
                'status' => "New Arrivals",
            ],
        ]);
    }
}
