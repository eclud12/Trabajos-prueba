<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmuebleserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immuebleservicios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('inmuebles_id');
            $table->foreign('inmuebles_id')->references('id')->on('inmuebles');
            
            $table->unsignedBigInteger('servicios_id');
            $table->foreign('servicios_id')->references('id')->on('servicios');
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
        Schema::dropIfExists('immuebleservicios');
    }
}
