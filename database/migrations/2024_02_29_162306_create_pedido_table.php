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
        Schema::create('pedido', function (Blueprint $table) {
            $table->integer('id_pedido', true);
            $table->double('precio');
            $table->integer('unidades');
            $table->string('detalles_descripcion', 100);
            $table->string('nom_producto', 45);
            $table->integer('id_admin_pedido')->index('id_admin_pedido');
            $table->integer('id_proveedor_pedido')->index('id_proveedor_pedido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
};
