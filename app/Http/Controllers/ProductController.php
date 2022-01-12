<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\MajorCategory;

class ProductController extends Controller
{
    public function showProduct(){
        return view('products.show_product');
    }

    public function createProduct(){
        $sub_categories = DB::select('SELECT * from minor_categories');
        return view('products.create_product', [
            'sub_categories' => $sub_categories,
        ]);
    }

    public function storeProduct(Request $request){
         //Validate the inputs
         $request->validate([
            // 'product_images' => 'required|image|mimes:jpeg,jpg,bmp,png',
            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $products = Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'minor_category_id' => $request->minor_category_id,
        ]);

        $product_details = ProductDetail::create([
            'quantity' => $request->quantity, 
            'price' => $request->price, 
            'discount' => $request->discount, 
            'product_id' => $products->id,
        ]);

        $path =  public_path(). '/images/products/';
        foreach ($request->file('product_images') as $product_image) { 
            $filename = time() . '.' . $product_image->getClientOriginalExtension();
            $product_image->move($path, $filename);
            $image = ProductImage::create([
                'product_images' => $filename,
                'product_id' => $products->id,
            ]);
                
        }
        // $product_images = $request->file('product_images');
        // $path =  public_path(). '/images/products/';
        // $filename = time() . '.' . $product_images->getClientOriginalExtension();
        // $product_images->move($path, $filename);

        // $image = ProductImage::create([
        //     'product_images' => $filename,
        //     'product_id' => $products->id,
        // ]);

        foreach ($request->product_sizes as $product_size) {
            $sizes = DB::table('product_sizes')->insert([
                'size_id' => $size_id,
                'product_id' => $products->id,
            ]);
        }

        foreach ($request->product_colors as $product_color) {
            $colors = DB::table('product_colors')->insert([
                'color_id' => $color_id,
                'product_id' => $products->id,
            ]);        
        }
        Session::flash('success', 'Product Inserted Successfully');
        return back();
    }

    public function cart(){
        $categories = MajorCategory::all();
        return view('cart', [
            'categories' => $categories,
        ]);
    }

    public function wishlist(){
        $categories = MajorCategory::all();
        return view('wishlist', [
            'categories' => $categories,
        ]);
    }
}
