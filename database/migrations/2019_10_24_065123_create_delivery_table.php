<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('cart_shipping_id');
            $table->unsignedInteger('brand_ship_id');
            $table->foreign('cart_shipping_id')->references('id')->on('cart_shipping');
            $table->foreign('brand_ship_id')->references('id')->on('delivery_brand');
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
        Schema::dropIfExists('delivery');
    }
}
