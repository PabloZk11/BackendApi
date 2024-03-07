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
        Schema::table('log_informe', function (Blueprint $table) {
            $table->foreign(['id_vendedor_informe'], 'log_informe_ibfk_1')->references(['id_usuario_papeleria'])->on('vendedor');
            $table->foreign(['id_vendedor_informe'], 'log_informe_ibfk_2')->references(['id_usuario_papeleria'])->on('vendedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log_informe', function (Blueprint $table) {
            $table->dropForeign('log_informe_ibfk_1');
            $table->dropForeign('log_informe_ibfk_2');
        });
    }
};
