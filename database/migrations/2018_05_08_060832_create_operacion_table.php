<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operaciones', function (Blueprint $table) {
            $table->unsignedInteger('idInmueble');
            $table->unsignedInteger('idInteresado');
            $table->string('descripcion');
            $table->date('fecha');
            $table->unsignedInteger('idCliente')->index();
            $table->timestamps();

            $table->primary(['idInmueble','idInteresado']);
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
        Schema::dropIfExists('operacion');
    }
}
