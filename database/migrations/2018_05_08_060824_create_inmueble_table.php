<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreTitulo');
            $table->integer('supTotal');
            $table->integer('supCubierta');
            $table->integer('dormitorios');
            $table->integer('banos');
            $table->integer('cocheras');
            $table->integer('pisos');
            $table->integer('antiguedad');
            $table->integer('orientacion');
            $table->decimal('precio',12,2);
            $table->unsignedInteger('idTipoOperacion');
            $table->string('estado');
            $table->string('descripcion');
            $table->unsignedInteger('idLocalidad')->index();
            $table->unsignedInteger('idBarrio')->index();
            $table->string('direccion',32);
            $table->unsignedInteger('idPropietario')->index();
            $table->unsignedInteger('idConstructora')->index();
            $table->unsignedInteger('idCliente')->index();
            $table->timestamps();

            $table->foreign('idTipoOperacion')->references('id')->on('tiposOperaciones')->onDelete('cascade');
            $table->foreign('idLocalidad')->references('id')->on('localidades')->onDelete('cascade');
            $table->foreign('idBarrio')->references('id')->on('barrios')->onDelete('cascade');
            $table->foreign('idPropietario')->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreign('idConstructora')->references('id')->on('constructoras')->onDelete('cascade');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');

        });

    # inmuebles_caracteristicasAdicionales

    Schema::create('inmuebles_cAdic', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInmueble')->index();
            $table->unsignedInteger('idCaracteristica')->index();
            $table->timestamps();

            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idCaracteristica')->references('id')->on('caracteristicasAdicionales')->onDelete('cascade');
        });

    # inmuebles_ambientes

    Schema::create('inmuebles_ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInmueble')->index();
            $table->unsignedInteger('idAmbientes')->index();
            $table->timestamps();

            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idAmbientes')->references('id')->on('ambientes')->onDelete('cascade');
        });

    # inmuebles_comodidades

    Schema::create('inmuebles_comodidades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idInmueble')->index();
            $table->unsignedInteger('idComodidades')->index();
            $table->timestamps();

            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
            $table->foreign('idComodidades')->references('id')->on('comodidades')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueble');
        Schema::dropIfExists('inmuebles_caracteristicasAdicionales');
        Schema::dropIfExists('inmuebles_ambientes');
        Schema::dropIfExists('inmuebles_comodidades');
    }
}
