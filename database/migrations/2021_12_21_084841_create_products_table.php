<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('minor_category_id');
            $table->foreign('minor_category_id')->references('id')->on('minor_categories')->onDelete('cascade');
            $table->integer('rank')->default(0);
            $table->enum('product_status', ['Available', 'Not Available'])->default('Available');
            $table->timestamps();
        });

        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->float('price',8,2);
            $table->float('discount',8,2)->nullable();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('purchasing_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->string('product_images');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();

        });
        Schema::create('product_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('size_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();

        });
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();

        });

        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('total_price');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->timestamps();

        });

        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->timestamps();

        });

        Schema::create('customer_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('deals_and_promotions', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('specification');
            $table->float('price',10,2);
            $table->float('discount',10,2)->nullable();
            $table->string('picture');
            $table->enum('status', ['Deals and Promotions', 'New Arrivals']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('product_details');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('product_sizes');
        Schema::dropIfExists('product_colors');
        Schema::dropIfExists('cats');
        Schema::dropIfExists('wishlists');
        Schema::dropIfExists('customer_products');
        Schema::dropIfExists('deals_and_promotions');
    }
}
