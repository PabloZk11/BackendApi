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
        Schema::table('rol_usuario', function (Blueprint $table) {
            $table->foreign(['id_usuario_rol'], 'rol_usuario_ibfk_1')->references(['id_usuario'])->on('usuario');
            $table->foreign(['id_rol_usuario'], 'rol_usuario_ibfk_3')->references(['id_rol'])->on('roles');
            $table->foreign(['id_tdoc_usuario'], 'rol_usuario_ibfk_2')->references(['id_tdoc_usuario'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rol_usuario', function (Blueprint $table) {
            $table->dropForeign('rol_usuario_ibfk_1');
            $table->dropForeign('rol_usuario_ibfk_3');
            $table->dropForeign('rol_usuario_ibfk_2');
        });
    }
};
