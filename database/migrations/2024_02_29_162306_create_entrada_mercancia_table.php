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
        Schema::create('entrada_mercancia', function (Blueprint $table) {
            $table->integer('id_entrada', true);
            $table->string('nom_producto', 45);
            $table->integer('cantidad_unidades');
            $table->double('precio_compra');
            $table->string('detalles_descripcion', 45);
            $table->integer('id_pedido_entrada')->index('id_pedido_entrada');
            $table->integer('id_proveedor_entrada')->index('id_proveedor_entrada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada_mercancia');
    }
};
