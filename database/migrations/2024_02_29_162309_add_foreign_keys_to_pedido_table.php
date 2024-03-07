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
        Schema::table('pedido', function (Blueprint $table) {
            $table->foreign(['id_admin_pedido'], 'pedido_ibfk_1')->references(['id_admin'])->on('administrador');
            $table->foreign(['id_proveedor_pedido'], 'pedido_ibfk_2')->references(['id_proveedor'])->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign('pedido_ibfk_1');
            $table->dropForeign('pedido_ibfk_2');
        });
    }
};
