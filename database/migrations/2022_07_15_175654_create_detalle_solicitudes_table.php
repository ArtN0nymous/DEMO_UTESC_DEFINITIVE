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
        Schema::create('detalle_solicitudes', function (Blueprint $table) {
            $table->id('pk_detalle_servicio');
            $table->unsignedBigInteger('fk_articulo');
            $table->foreign('fk_articulo')->references('pk_articulo')->on('inventario');
            $table->integer('cantidad');
            $table->integer('cantidad_autorizada');
            $table->unsignedBigInteger('fk_unidad');
            $table->foreign('fk_unidad')->references('pk_unidad')->on('unidades');
            $table->unsignedBigInteger('fk_servicio');
            $table->foreign('fk_servicio')->references('pk_servicio')->on('servicios');
            $table->unsignedBigInteger('fk_lugar');
            $table->foreign('fk_lugar')->references('pk_lugar')->on('lugares');
            $table->dateTime('fecha_ini');
            $table->dateTime('fecha_final');
            $table->unsignedBigInteger('fk_solicitud');
            $table->foreign('fk_solicitud')->references('pk_solicitud')->on('solicitudes');
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
        Schema::dropIfExists('detalle_solicitudes');
    }
};
