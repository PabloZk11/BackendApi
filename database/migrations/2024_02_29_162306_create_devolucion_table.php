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
        Schema::create('devolucion', function (Blueprint $table) {
            $table->integer('id_devolucion', true);
            $table->string('nom_producto', 45);
            $table->integer('unidades');
            $table->string('detalle', 45);
            $table->integer('id_entrada_devolucion')->index('id_entrada_devolucion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devolucion');
    }
};
