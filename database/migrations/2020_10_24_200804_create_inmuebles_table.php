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
            $table->Increments('id');
            $table->string('casa',30);
            $table->string('departamento',30);
            $table->string('oficina',30);
            $table->string('terreno',30);
            $table->integer('estados_id');
            $table->foreign('estados_id')->references('estados_id')->on('estados');
            $table->integer('municipios_id');
            $table->foreign('municipios_id')->references('municipios_id')->on('municipios');
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
