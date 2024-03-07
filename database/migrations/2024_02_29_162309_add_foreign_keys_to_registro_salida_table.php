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
        Schema::table('registro_salida', function (Blueprint $table) {
            $table->foreign(['id_factura_salidas'], 'registro_salida_ibfk_1')->references(['id_factura'])->on('factura_salida');
            $table->foreign(['id_producto_salida'], 'registro_salida_ibfk_2')->references(['id_producto'])->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_salida', function (Blueprint $table) {
            $table->dropForeign('registro_salida_ibfk_1');
            $table->dropForeign('registro_salida_ibfk_2');
        });
    }
};
