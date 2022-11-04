<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basketCollections', function (Blueprint $table) {
            $table->foreignId('basket_id')->references('basket_id')->on('baskets')->onupdate('cascade')->ondelete('cascade');
            $table->foreignId('product_id')->references('product_id')->on('products')->onupdate('cascade')->ondelete('cascade');
            $table->foreignId('orderline_ref_no')->references('orderline_ref_no')->on('orderline')->onupdate('cascade')->ondelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
