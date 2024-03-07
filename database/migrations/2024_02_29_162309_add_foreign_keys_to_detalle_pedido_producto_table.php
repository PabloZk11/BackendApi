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
        Schema::table('detalle_pedido_producto', function (Blueprint $table) {
            $table->foreign(['id_pedido_detalle'], 'detalle_pedido_producto_ibfk_1')->references(['id_pedido'])->on('pedido');
            $table->foreign(['id_producto_detalle'], 'detalle_pedido_producto_ibfk_2')->references(['id_producto'])->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_pedido_producto', function (Blueprint $table) {
            $table->dropForeign('detalle_pedido_producto_ibfk_1');
            $table->dropForeign('detalle_pedido_producto_ibfk_2');
        });
    }
};
