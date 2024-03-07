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
        Schema::table('proveedor', function (Blueprint $table) {
            $table->foreign(['id_proveedor', 'id_tdoc_proveedor'], 'proveedor_ibfk_1')->references(['id_usuario', 'id_tdoc_usuario'])->on('usuario');
            $table->foreign(['id_proveedor', 'id_tdoc_proveedor'], 'proveedor_ibfk_2')->references(['id_usuario', 'id_tdoc_usuario'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proveedor', function (Blueprint $table) {
            $table->dropForeign('proveedor_ibfk_1');
            $table->dropForeign('proveedor_ibfk_2');
        });
    }
};
