<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmuebleserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebleservicios', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('inmuebles_id')->unsigned();
            $table->foreign('inmuebles_id')->references('inmuebles_id')->on('inmuebles');
            $table->integer('servicios_id')->unsigned();
            $table->foreign('servicios_id')->references('servicios_id')->on('servicios');
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
        Schema::dropIfExists('inmuebleservicios');
    }
}
