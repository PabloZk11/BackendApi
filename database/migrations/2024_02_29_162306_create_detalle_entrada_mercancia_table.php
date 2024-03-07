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
        Schema::create('detalle_entrada_mercancia', function (Blueprint $table) {
            $table->integer('id_mercancia_detalle');
            $table->integer('id_producto_detalle')->index('id_producto_detalle');

            $table->primary(['id_mercancia_detalle', 'id_producto_detalle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_entrada_mercancia');
    }
};
