<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->unsignedInteger('idLocalidad')->index();
            $table->foreign('idLocalidad')->references('id')->on('localidades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barrios');
    }
}