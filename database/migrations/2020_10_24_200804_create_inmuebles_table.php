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
            $table->bigIncrements('id');
            $table->string('casa');
            $table->string('departamento');
            $table->string('oficina');
            $table->string('terreno');
            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->unsignedBigInteger('municipios_id');
            $table->foreign('municipios_id')->references('id')->on('municipios');
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
