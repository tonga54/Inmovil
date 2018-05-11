<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',32);
            $table->string('apellido',32);
            $table->string('telefono',11);
            $table->string('email',32)->unique();
            $table->unsignedInteger('idLocalidad')->index();
            $table->unsignedInteger('idBarrio')->index();
            $table->unsignedInteger('idCliente')->index();
            $table->timestamps();

            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('interesados');
    }
}
