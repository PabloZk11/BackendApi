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
        Schema::table('usuario', function (Blueprint $table) {
            $table->foreign(['id_tdoc_usuario'], 'usuario_ibfk_1')->references(['id_documento'])->on('documento_identificacion');
            $table->foreign(['id_tdoc_usuario'], 'usuario_ibfk_2')->references(['id_documento'])->on('documento_identificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign('usuario_ibfk_1');
            $table->dropForeign('usuario_ibfk_2');
        });
    }
};
