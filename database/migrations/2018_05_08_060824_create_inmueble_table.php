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
            $table->decimal('precio',12,2);
            $table->string('idMlCategoria1',12);
            $table->string('idMlCategoria2',12);
            $table->string('descripcion');
            $table->string('direccion',32);
            $table->unsignedInteger('idLocalidad')->index();
            $table->unsignedInteger('idBarrio')->index();
            $table->unsignedInteger('idPropietario')->index();
            $table->unsignedInteger('idConstructora')->index();
            $table->unsignedInteger('idCliente')->index();
            $table->timestamps();

            $table->foreign('idTipoOperacion')->references('id')->on('mlCategorias2')->onDelete('cascade');
            $table->foreign('idLocalidad')->references('id')->on('localidades')->onDelete('cascade');
            $table->foreign('idBarrio')->references('id')->on('barrios')->onDelete('cascade');
            $table->foreign('idPropietario')->references('id')->on('propietarios')->onDelete('cascade');
            $table->foreign('idConstructora')->references('id')->on('constructoras')->onDelete('cascade');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');

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
    }
}
