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
        Schema::create('log_informe', function (Blueprint $table) {
            $table->integer('id_informe', true);
            $table->dateTime('fecha_creacion');
            $table->string('detalles_informe', 45);
            $table->integer('id_vendedor_informe')->index('id_vendedor_informe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_informe');
    }
};
