<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('advance')->nullable();
            $table->float('cost_price',8,2);
            $table->float('total_cost_price',8,2);
            $table->date('purchasing_date');
            $table->string('product_name');
            $table->unsignedBigInteger('vendor_id');
            $table->enum('purchase_status', ['In stock', 'Out of stock']);
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
        Schema::dropIfExists('purchases');
    }
}
