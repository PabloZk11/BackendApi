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
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->integer('id_usuario_rol');
            $table->integer('id_rol_usuario')->index('id_rol_usuario');
            $table->integer('id_tdoc_usuario')->index('id_tdoc_usuario');

            $table->primary(['id_usuario_rol', 'id_rol_usuario', 'id_tdoc_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_usuario');
    }
};
