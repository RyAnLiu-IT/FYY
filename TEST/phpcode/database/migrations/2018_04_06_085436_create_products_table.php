<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('broadway_code')->unique();
            $table->integer('bid')->unsigned();
            $table->integer('tid')->unsigned();
            $table->string('name');
            $table->string('model');
            $table->integer('dimensions_W_mm')->unsigned()->nullable();
            $table->integer('dimensions_H_mm')->unsigned()->nullable();
            $table->integer('dimensions_D_mm')->unsigned()->nullable();
            $table->double('net_weight')->unsigned();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('place_of_origin');
            $table->string('sales_territory');
            $table->integer('warranty_m')->unsigned()->nullable();
            $table->string('special_feature')->nullable();
            $table->string('special_feature2')->nullable();
            $table->string('accessory')->nullable();
            $table->foreign('bid')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tid')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
