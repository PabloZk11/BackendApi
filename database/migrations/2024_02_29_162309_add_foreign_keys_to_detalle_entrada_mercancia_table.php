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
        Schema::table('detalle_entrada_mercancia', function (Blueprint $table) {
            $table->foreign(['id_mercancia_detalle'], 'detalle_entrada_mercancia_ibfk_1')->references(['id_entrada'])->on('entrada_mercancia');
            $table->foreign(['id_producto_detalle'], 'detalle_entrada_mercancia_ibfk_2')->references(['id_producto'])->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_entrada_mercancia', function (Blueprint $table) {
            $table->dropForeign('detalle_entrada_mercancia_ibfk_1');
            $table->dropForeign('detalle_entrada_mercancia_ibfk_2');
        });
    }
};
