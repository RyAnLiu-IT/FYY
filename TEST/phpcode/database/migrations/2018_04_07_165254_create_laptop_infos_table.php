<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaptopInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('pid')->unsigned()->unique();
            $table->integer('tid')->unsigned();
            $table->string('processor');
            $table->string('operating_system');
            $table->string('memory');
            $table->string('storage');
            $table->integer('display_resolution_width')->unsigned();
            $table->integer('display_resolution_length')->unsigned();
            $table->foreign('pid')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tid')->references('tid')->on('products')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('laptop_infos');
    }
}
