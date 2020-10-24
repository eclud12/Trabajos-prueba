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
            $table->bigIncrements('idmuebleservicio');
            $table->unsignedBigInteger('idinmueble');
            $table->foreign('idinmueble')->references('idinmueble')->on('inmuebles');
            $table->unsignedBigInteger('idservicio');
            $table->foreign('idservicio')->references('idservicio')->on('servicios');
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
