<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function up()
    {
        /**
         * Developer: Ibrahim Ahmad (210029073)
         * Description: This will create the fields for the customer table
         * with its appropriate types.
         */
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_first_name', 31);
            $table->string('customer_last_name', 31);
            $table->text('customer_address_line_1');
            $table->text('customer_address_line_2');
            $table->text('customer_postcode');
            $table->string('customer_status');
            $table->string('username', 255);
            $table->string('password', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @author Ibrahim Ahmad (210029073) <210029073@aston.ac.uk>
     * Description:
     * Need to remove this method during production at a future release, because not appropriate as this will drop all tables if
     * exists.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
