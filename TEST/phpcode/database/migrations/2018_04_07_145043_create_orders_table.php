<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('uid')->unsigned();
            $table->integer('pid')->unsigned();
            $table->integer('aid')->unsigned();
            $table->integer('qty')->unsigned();
            $table->string('promotional_code')->nullable();
            $table->string('shipping_methods');
            $table->date('delivery_time_1');
            $table->date('delivery_time_2');
            $table->integer('sid')->unsigned()->nullable();
            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pid')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sid')->references('id')->on('shop_addresses')->onDelete('cascade')->onUpdate('cascade');
            });

        DB::statement('ALTER TABLE orders ADD CONSTRAINT chk_dtime_1 CHECK (delivery_time_1 >  CURRENT_DATE() + 6);');
        DB::statement('ALTER TABLE orders ADD CONSTRAINT chk_dtime_2 CHECK (delivery_time_2 >  CURRENT_DATE() + 6);');
        $att = "'Shop Pickup'";
        DB::statement("ALTER TABLE orders ADD CONSTRAINT chk_sid CHECK ((NOT shipping_methods = $att ) OR (sid is NOT NULL));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
