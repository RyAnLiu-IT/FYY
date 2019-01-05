<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrinterInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printer_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('pid')->unsigned()->unique();
            $table->integer('tid')->unsigned();
            $table->boolean('screen_display');
            $table->boolean('auto_duplex_printing');
            $table->integer('print_resolution_length')->unsigned();
            $table->integer('print_resolution_width')->unsigned();
            $table->integer('max_number_of_copies')->unsigned();
            $table->double('scanning_speed_sec')->unsigned();
            $table->integer('scan_resolution_dpi')->unsigned();
            $table->string('main_feature');
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
        Schema::drop('printer_infos');
    }
}
