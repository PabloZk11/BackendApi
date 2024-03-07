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
        Schema::create('detalle_pedido_producto', function (Blueprint $table) {
            $table->integer('id_pedido_detalle');
            $table->integer('id_producto_detalle')->index('id_producto_detalle');

            $table->primary(['id_pedido_detalle', 'id_producto_detalle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedido_producto');
    }
};
