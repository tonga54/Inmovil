<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposOperaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        # tiposOperaciones_CaractersiticasAdicionales

        Schema::create('tOper_cAdic', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idTpoOper')->index();
            $table->unsignedInteger('idCra')->index();
            $table->timestamps();

            $table->foreign('idTpoOper')->references('id')->on('tiposOperaciones')->onDelete('cascade');
            $table->foreign('idCra')->references('id')->on('caracteristicasAdicionales')->onDelete('cascade');
        });

        # tiposOperaciones_ambientes

        Schema::create('tOper_ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idTpoOper')->index();
            $table->unsignedInteger('idAmbientes')->index();
            $table->timestamps();

            $table->foreign('idTpoOper')->references('id')->on('tiposOperaciones')->onDelete('cascade');
            $table->foreign('idAmbientes')->references('id')->on('ambientes')->onDelete('cascade');
        });

        # tiposOperaciones_comodidades

        Schema::create('tOper_comodidades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idTpoOper')->index();
            $table->unsignedInteger('idComodidades')->index();
            $table->timestamps();

            $table->foreign('idTpoOper')->references('id')->on('tiposOperaciones')->onDelete('cascade');
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
        Schema::dropIfExists('tipos_operaciones');
        Schema::dropIfExists('tiposOperaciones_caracteristicasAdicionales');
        Schema::dropIfExists('tiposOperaciones_ambientes');
        Schema::dropIfExists('tiposOperaciones_comodidades');
    }
}
