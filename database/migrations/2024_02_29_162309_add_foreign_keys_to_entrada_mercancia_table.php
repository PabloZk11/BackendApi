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
        Schema::table('entrada_mercancia', function (Blueprint $table) {
            $table->foreign(['id_pedido_entrada'], 'entrada_mercancia_ibfk_1')->references(['id_pedido'])->on('pedido');
            $table->foreign(['id_proveedor_entrada'], 'entrada_mercancia_ibfk_2')->references(['id_proveedor'])->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entrada_mercancia', function (Blueprint $table) {
            $table->dropForeign('entrada_mercancia_ibfk_1');
            $table->dropForeign('entrada_mercancia_ibfk_2');
        });
    }
};
