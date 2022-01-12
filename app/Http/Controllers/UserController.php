<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MajorCategory;

class UserController extends Controller
{
    public function index(){
        $categories = MajorCategory::all();
        $products = DB::select("SELECT
        p.*,pd.quantity, pd.price, pd.discount,mc.sub_category_name  
        FROM products p
        LEFT JOIN product_details pd on p.id = pd.product_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id");

        $deal_promotions = DB::select('SELECT * from deals_and_promotions');
        return view('index', [
            'deal_promotions' => $deal_promotions,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function showProducts($id){
        $categories = MajorCategory::all();
        $products = DB::select("SELECT
        p.*,pd.quantity, pd.price, pd.discount,mc.sub_category_name, pi.product_images
        FROM products p
        LEFT JOIN product_details pd on p.id = pd.product_id
        LEFT JOIN product_images pi on p.id = pi.product_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id WHERE mc.major_category_id =" .$id);
        return view('products.show_products_based_on_category', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function shop(){
        $categories = MajorCategory::all();
        return view('products.shop', [
            'categories' => $categories,
        ]);
    }

    public function productImage(){
        $categories = MajorCategory::all();
        $images = DB::select("SELECT
        p.*,pd.quantity, pd.price, pd.discount, pi.product_images,mc.sub_category_name
        FROM products p
        LEFT JOIN product_details pd on p.id = pd.product_id
        LEFT JOIN product_images pi on p.id = pi.product_id
        LEFT JOIN product_sizes ps on p.id = ps.product_id
        LEFT JOIN sizes s on s.id = ps.size_id
        LEFT JOIN product_colors pc on p.id = pc.product_id
        LEFT JOIN colors c on c.id = pc.color_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id WHERE p.id =" .$id);
        return view('products.product_details', [
            'categories' => $categories,
            'images' => $images,
        ]);
    }

    public function productDetails($id){
        $categories = MajorCategory::all();
        $images = DB::select("SELECT
        p.*,pd.quantity, pd.price, pd.discount, pi.product_images,mc.sub_category_name
        FROM products p
        LEFT JOIN product_details pd on p.id = pd.product_id
        LEFT JOIN product_images pi on p.id = pi.product_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id WHERE p.id =" .$id);

        $products = DB::select("SELECT
        p.*,pd.quantity, pd.price, pd.discount, pi.product_images,mc.sub_category_name,c.name as colorname,c.color, s.name as sizename,s.size
        FROM products p
        LEFT JOIN product_details pd on p.id = pd.product_id
        LEFT JOIN product_images pi on p.id = pi.product_id
        LEFT JOIN product_sizes ps on p.id = ps.product_id
        LEFT JOIN sizes s on s.id = ps.size_id
        LEFT JOIN product_colors pc on p.id = pc.product_id
        LEFT JOIN colors c on c.id = pc.color_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id WHERE p.id =" .$id);
       
        $colors = DB::select("SELECT
        c.name as colorname,c.color
        FROM products p
        LEFT JOIN product_colors pc on p.id = pc.product_id
        LEFT JOIN colors c on c.id = pc.color_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id WHERE p.id =" .$id);

        $sizes = DB::select("SELECT
        s.name as sizename,s.size
        FROM products p
        LEFT JOIN product_sizes ps on p.id = ps.product_id
        LEFT JOIN sizes s on s.id = ps.size_id
        LEFT JOIN minor_categories mc on mc.id = p.minor_category_id WHERE p.id =" .$id);
        return view('products.product_details', [
            'categories' => $categories,
            'products' => $products[0],
            'images' => $images,
            'colors' => $colors,
            'sizes' => $sizes,
        ]);
    }

    public function about(){
        $categories = MajorCategory::all();
        return view('about', [
            'categories' => $categories,
        ]);
    }
    public function contact(){
        $categories = MajorCategory::all();
        return view('contact', [
            'categories' => $categories,
        ]);
    }
    public function blog(){
        $categories = MajorCategory::all();
        return view('blog', [
            'categories' => $categories,
        ]);
    }
    public function account(){
        $categories = MajorCategory::all();
        return view('account', [
            'categories' => $categories,
        ]);
    }
}
