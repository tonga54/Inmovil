<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConstructorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',32);
            $table->bigInteger('documento');
            $table->string('telefono',11);
            $table->unsignedInteger('idLocalidad')->index();
            $table->string('email',32);
            $table->unsignedInteger('idCliente')->index();
            $table->timestamps();
            

            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('idLocalidad')->references('id')->on('localidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constructoras');
    }
}
