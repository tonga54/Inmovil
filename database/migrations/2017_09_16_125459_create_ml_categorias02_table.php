<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMlCategorias02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlCategorias2', function (Blueprint $table) {
            $table->string('id', 12);
            $table->string('parentId', 12);
            $table->string('name',32);

            $table->primary(['id','parentId']);
            $table->foreign('parentId')->references('id')->on('mlCategorias1')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mlCategorias2');
    }
}
