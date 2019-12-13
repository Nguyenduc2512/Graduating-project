<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_bills', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('bill_id');
            $table->unsignedInteger('properties_id');
            $table->tinyInteger('amount');
            $table->foreign('bill_id')->references('id')->on('bills');
            $table->foreign('properties_id')->references('id')->on('properties');

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
        Schema::dropIfExists('properties_bills');
    }
}
