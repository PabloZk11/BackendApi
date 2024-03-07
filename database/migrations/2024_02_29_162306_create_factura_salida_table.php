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
        Schema::create('factura_salida', function (Blueprint $table) {
            $table->integer('id_factura', true);
            $table->integer('id_vendedor_factura')->index('id_vendedor_factura');
            $table->string('descripcion', 45);
            $table->dateTime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_salida');
    }
};
