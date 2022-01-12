<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajorCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('major_categories', function (Blueprint $table) {
            $table->id();
            $table->string('main_category_name');
            $table->text('description')->nullable();
            $table->text('picture')->nullable();
            $table->timestamps();
        });

        Schema::create('minor_categories', function (Blueprint $table) {
            $table->id();
            $table->string('sub_category_name');
            $table->text('description')->nullable();
            $table->text('picture')->nullable();
            $table->unsignedBigInteger('major_category_id');
            $table->foreign('major_category_id')->references('id')->on('major_categories');
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
        Schema::dropIfExists('major_categories');
        Schema::dropIfExists('minor_categories');
    }
}
