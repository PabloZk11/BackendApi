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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->integer('id_proveedor');
            $table->integer('id_tdoc_proveedor');
            $table->string('producto', 45);
            $table->string('detalles_productos', 100);

            $table->primary(['id_proveedor', 'id_tdoc_proveedor']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
};
