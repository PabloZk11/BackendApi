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
        Schema::table('vendedor', function (Blueprint $table) {
            $table->foreign(['id_usuario_papeleria', 'id_tdoc_vendedor'], 'vendedor_ibfk_1')->references(['id_usuario', 'id_tdoc_usuario'])->on('usuario');
            $table->foreign(['id_usuario_papeleria', 'id_tdoc_vendedor'], 'vendedor_ibfk_2')->references(['id_usuario', 'id_tdoc_usuario'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendedor', function (Blueprint $table) {
            $table->dropForeign('vendedor_ibfk_1');
            $table->dropForeign('vendedor_ibfk_2');
        });
    }
};
