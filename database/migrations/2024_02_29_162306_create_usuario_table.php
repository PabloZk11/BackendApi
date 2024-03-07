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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->integer('id_tdoc_usuario')->index('id_tdoc_usuario');
            $table->string('nombre', 45);
            $table->string('email', 45);
            $table->binary('contraseña');

            $table->primary(['id_usuario', 'id_tdoc_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
