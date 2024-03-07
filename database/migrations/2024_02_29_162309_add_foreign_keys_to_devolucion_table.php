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
        Schema::table('devolucion', function (Blueprint $table) {
            $table->foreign(['id_entrada_devolucion'], 'devolucion_ibfk_1')->references(['id_entrada'])->on('entrada_mercancia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devolucion', function (Blueprint $table) {
            $table->dropForeign('devolucion_ibfk_1');
        });
    }
};
