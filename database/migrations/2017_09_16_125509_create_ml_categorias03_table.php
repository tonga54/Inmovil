<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMlCategorias03Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlCategorias3', function (Blueprint $table) {
            $table->string('id', 64);
            $table->string('parentId', 12);
            $table->string("name", 32);
            $table->string("value_type", 12);
            $table->string("attribute_group_name", 32);
            $table->string("value_max_length", 4);

            $table->primary(['id','parentId']);
            $table->foreign('parentId')->references('id')->on('mlCategorias2')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mlCategorias3');
    }
}
