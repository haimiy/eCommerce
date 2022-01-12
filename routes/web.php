<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);

Route::get('show_products/{id}', [UserController::class, 'showProducts']);
Route::get('shop', [UserController::class, 'shop']);
Route::get('product_image', [UserController::class, 'productImage']);
Route::get('product_details/{id}', [UserController::class, 'productDetails']);
Route::get('blog', [UserController::class, 'blog']);
Route::get('about', [UserController::class, 'about']);
Route::get('account', [UserController::class, 'account']);
Route::get('contact', [UserController::class, 'contact']);
Route::get('cart', [ProductController::class, 'cart']);
Route::get('wishlist', [ProductController::class, 'wishlist']);


Route::prefix('superAdmin')->middleware('superAdmin')->group(function(){
    Route::get('index', [SuperAdminController::class, 'index']);
});

Route::prefix('vendor')->middleware('vendor')->group(function(){
    Route::get('index', [VendorController::class, 'index']);

    Route::get('show_category', [CategoryController::class, 'showCategory']);
    Route::get('create_category', [CategoryController::class, 'createCategory']);
    Route::post('create_major_category', [CategoryController::class, 'createMajorCategory']);
    Route::post('create_minor_category', [CategoryController::class, 'createMinorCategory']);

    Route::get('show_product', [ProductController::class, 'showProduct']);
    Route::get('create_product', [ProductController::class, 'createProduct']);
    Route::post('store_product', [ProductController::class, 'storeProduct']);

    Route::get('colors', [SuperAdminController::class, 'colors']);
    Route::get('sizes', [SuperAdminController::class, 'sizes']);
    Route::post('store_colors', [SuperAdminController::class, 'storeColor']);
    Route::post('store_sizes', [SuperAdminController::class, 'storeSize']);


    Route::get('show_purchases', [PurchaseController::class, 'showPurchases']);
    Route::get('create_purchases', [PurchaseController::class, 'createPurchases']);
    Route::post('store_purchases', [PurchaseController::class, 'storePurchases']);


});

Route::prefix('customer')->middleware('customer')->group(function(){
    Route::get('index', [CustomerController::class, 'index']);
});
Route::get('logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy']);
require __DIR__.'/auth.php';
