<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('sid')->unsigned()->unique();
            $table->string('image');
            $table->foreign('sid')->references('id')->on('shop_addresses')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_images');
    }
}
