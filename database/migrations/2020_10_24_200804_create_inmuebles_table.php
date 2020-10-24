<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->bigIncrements('idinmueble');
            $table->string('casa',30);
            $table->string('departamento',30);
            $table->string('oficina',30);
            $table->string('terreno',30);
            $table->unsignedBigInteger('idestado');
            $table->foreign('idestado')->references('idestado')->on('estados');
            $table->unsignedBigInteger('idmunicipio');
            $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios');
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
        Schema::dropIfExists('inmuebles');
    }
}
