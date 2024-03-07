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
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->integer('id_factura_detalle');
            $table->integer('id_producto_detalle')->index('id_producto_detalle');
            $table->integer('unidades');
            $table->double('precio');

            $table->primary(['id_factura_detalle', 'id_producto_detalle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura');
    }
};
