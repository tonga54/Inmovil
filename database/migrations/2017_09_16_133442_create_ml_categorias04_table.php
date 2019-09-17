<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMlCategorias04Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlCategorias4', function (Blueprint $table) {
            $table->string('id', 64);
            $table->string('parentId', 64);
            $table->string("name", 32);

            $table->primary(['id','parentId']);
            $table->foreign('parentId')->references('id')->on('mlCategorias3')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mlCategorias4');
    }
}
