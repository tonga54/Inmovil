<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesInmueblesMlcategorias3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles_mlcategorias3', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInmueble')->index();
            $table->string('idMlCategoria3',64)->index();
            $table->timestamps();

            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idMlCategoria3')->references('id')->on('mlCategorias3')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles_mlcategorias3');
    }
}
