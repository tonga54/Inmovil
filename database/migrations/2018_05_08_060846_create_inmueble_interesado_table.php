<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmuebleInteresadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueble_interesado', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInmueble')->index();
            $table->unsignedInteger('idInteresado')->index();
            $table->string('descripcion');
            $table->date('fecha');
            $table->unsignedInteger('idCliente')->index();
            $table->timestamps();

            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idInteresado')->references('id')->on('interesados')->onDelete('cascade');
            $table->foreign('idCliente')->references('id')->on('inmuebles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble_interesado');
    }
}
