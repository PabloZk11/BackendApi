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
        Schema::table('factura_salida', function (Blueprint $table) {
            $table->foreign(['id_vendedor_factura'], 'factura_salida_ibfk_1')->references(['id_usuario_papeleria'])->on('vendedor');
            $table->foreign(['id_vendedor_factura'], 'factura_salida_ibfk_2')->references(['id_usuario_papeleria'])->on('vendedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factura_salida', function (Blueprint $table) {
            $table->dropForeign('factura_salida_ibfk_1');
            $table->dropForeign('factura_salida_ibfk_2');
        });
    }
};
