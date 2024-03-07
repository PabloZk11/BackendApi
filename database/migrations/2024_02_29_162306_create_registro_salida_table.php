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
        Schema::create('registro_salida', function (Blueprint $table) {
            $table->integer('id_salida', true);
            $table->integer('id_producto_salida')->index('id_producto_salida');
            $table->integer('unidades');
            $table->integer('id_factura_salidas')->index('id_factura_salidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_salida');
    }
};
