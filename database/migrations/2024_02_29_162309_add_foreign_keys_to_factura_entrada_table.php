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
        Schema::table('factura_entrada', function (Blueprint $table) {
            $table->foreign(['id_proveedor'], 'factura_entrada_ibfk_1')->references(['id_proveedor'])->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factura_entrada', function (Blueprint $table) {
            $table->dropForeign('factura_entrada_ibfk_1');
        });
    }
};
