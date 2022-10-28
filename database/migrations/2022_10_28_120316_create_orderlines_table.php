<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This will setup each fields within the join table Orderline, according to each of their data types.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function up()
    {
        Schema::create('orderline', function (Blueprint $table) {
            $table->id('orderline_ref_no')->nullable(false)->autoincrement();
            #$table->increments('orderline_ref_no');
            #$table->integer('order_ref_no');
            #$table->integer('product_id');
            $table->foreignId('order_ref_no')->references('order_ref_no')->on('order')->onupdate('cascade')->ondelete('cascade');
            $table->foreignId('product_id')->references('product_id')->on('products')->onupdate('cascade')->ondelete('cascade');
            $table->dateTime('order_date');
            #$table->integer('quantity', 100);
            $table->float('price');
            $table->float('total_product_price');
            $table->boolean('is_in_basket');
            $table->engine="InnoDB";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderline');
    }
};
