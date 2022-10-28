<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This will setup each fields within the table, according to each of their data types.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @return void
     */
    public function up()
    {
        Schema::create('personnel', function (Blueprint $table) {
            $table->id('personnel_id');
            $table->string('personnel_first_name', 31);
            $table->string('personnel_last_name', 31);
            $table->string('personnel_username', 255);
            $table->string('personnel_password', 255);
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
        Schema::dropIfExists('personnel');
    }
};
