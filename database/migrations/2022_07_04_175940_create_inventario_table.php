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
        Schema::create('inventario', function (Blueprint $table) {
            $table->id('pk_articulo');
            $table->string('nombre_art', 100);
            $table->string('solicitados', 10);
            $table->string('existencia_pz', 10);
            $table->string('minimos', 20);
            $table->string('maximos', 30);
            $table->date('fecha');
            $table->string('descripcion', 150);
            $table->string('pedir', 30);
            $table->string('status', 45);
            $table->unsignedBigInteger('fk_marca');
            $table->foreign('marca')-> references('pk_marca')->on('marcas');
            $table->unsignedBigInteger('fk_proveedor');
            $table->foreign('fk_proveedor')-> references('pk_proveedor')->on('proveedores');
            $table->unsignedBigInteger('fk_subcategoria');
            $table->foreign('fk_subcategoria')-> references('pk_subcategoria')->on('subcategoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
};
