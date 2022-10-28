<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This will setup each fields within the order table, according to each of their data types.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_ref_no');
            $table->foreignId('id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('order_date');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
