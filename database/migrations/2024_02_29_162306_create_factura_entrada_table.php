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
        Schema::create('factura_entrada', function (Blueprint $table) {
            $table->integer('id_factura_entrada', true);
            $table->integer('id_proveedor')->index('id_proveedor');
            $table->string('descripcion', 200);
            $table->dateTime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_entrada');
    }
};
