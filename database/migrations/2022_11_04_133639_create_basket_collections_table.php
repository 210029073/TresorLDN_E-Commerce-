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
        Schema::create('basket_collections', function (Blueprint $table) {
            $table->id('basket_collection_id')->nullable(false)->autoincrement();
            $table->integer('user_id');
            $table->integer('id');
            $table->string('product_name');
            $table->string('product_type');
            $table->float('product_price');
            $table->boolean('is_discount_applied')->default(true);
            $table->float('price_deduction')->default(0);
            $table->string('product_description')->nullable(true);
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
        Schema::dropIfExists('basket_collections');
    }
};
