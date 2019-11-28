<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->tinyInteger('size');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('color_id')->references('id')->on('colors');
            $table->integer('amount');
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
        Schema::dropIfExists('properties');
    }
}
