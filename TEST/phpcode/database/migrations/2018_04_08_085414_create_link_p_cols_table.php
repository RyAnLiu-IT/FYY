<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkPColsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_p_cols', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('pid')->unsigned();
            $table->integer('col_id')->unsigned();
            $table->foreign('pid')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('col_id')->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('link_p_cols');
    }
}
