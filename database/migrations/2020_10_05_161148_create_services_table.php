<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servises', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Light_drone_pakiet_old_price',255);
            $table->string('Light_drone_pakiet_new_price',255);

            $table->string('FPV_Drone_Pakiet_old_price',255);
            $table->string('FPV_Drone_Pakiet_new_price',255);

            $table->string('pakiet_360_old_price',255);
            $table->string('pakiet_360_new_price',255);


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
        Schema::dropIfExists('servises');
    }
}
