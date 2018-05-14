<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosInmueble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotosInmueble', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url',64)->unique();
            $table->unsignedInteger('idInmueble')->index();
            $table->timestamps();

            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos_inmueble');
    }
    
}
