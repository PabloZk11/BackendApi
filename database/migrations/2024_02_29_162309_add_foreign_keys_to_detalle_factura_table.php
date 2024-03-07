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
        Schema::table('detalle_factura', function (Blueprint $table) {
            $table->foreign(['id_producto_detalle'], 'detalle_factura_ibfk_4')->references(['id_producto'])->on('producto');
            $table->foreign(['id_factura_detalle'], 'detalle_factura_ibfk_1')->references(['id_factura'])->on('factura_salida');
            $table->foreign(['id_factura_detalle'], 'detalle_factura_ibfk_3')->references(['id_factura'])->on('factura_salida');
            $table->foreign(['id_producto_detalle'], 'detalle_factura_ibfk_2')->references(['id_producto'])->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_factura', function (Blueprint $table) {
            $table->dropForeign('detalle_factura_ibfk_4');
            $table->dropForeign('detalle_factura_ibfk_1');
            $table->dropForeign('detalle_factura_ibfk_3');
            $table->dropForeign('detalle_factura_ibfk_2');
        });
    }
};
