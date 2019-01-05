<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('shop_address');
            $table->integer('phone')->unsigned();
            $table->string('business_hours');
            $table->string('mtr_station');
            $table->integer('paid')->unsigned();
            $table->foreign('paid')->references('id')->on('political_areas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_addresses');
    }
}
