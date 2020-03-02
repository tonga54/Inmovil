<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesInmueblesMlcategorias4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles_mlcategorias4', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInmueble')->index();
            $table->string('idMlCategoria4',64)->index();
            $table->timestamps();
            
            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idMlCategoria4')->references('id')->on('mlCategorias4')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles_mlcategorias4');
    }
}
