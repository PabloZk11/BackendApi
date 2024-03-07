<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id_producto', true);
            $table->integer('id_categoria_producto')->nullable()->index('id_categoria_producto');
            $table->string('nom_producto', 45);
            $table->double('precio');
            $table->integer('unidades');
            $table->string('detalles_descripcion', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
};
