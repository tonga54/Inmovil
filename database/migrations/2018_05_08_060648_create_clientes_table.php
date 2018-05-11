<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rut')->unique();
            $table->string('nombre',32);
            $table->string('apellido',32);
            $table->string('nombreEmpresa',20);
            $table->unsignedInteger('idLocalidad')->index();
            $table->unsignedInteger('idBarrio')->index();
            $table->string('direccion',32);
            $table->string('email',32);
            $table->timestamps();

            $table->foreign('idLocalidad')->references('id')->on('localidades')->onDelete('cascade');
            $table->foreign('idBarrio')->references('id')->on('barrios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
