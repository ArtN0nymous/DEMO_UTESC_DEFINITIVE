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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('pk_solicitud');
            $table->unsignedBigInteger('fk_usuario');
            $table->unsignedBigInteger('fk_usuario_solicitado');
            $table->text('notas');
            $table->text('notas2');
            $table->text('adjunto');
            $table->foreign('fk_usuario')->references('pk_usuario')->on('usuarios');
            $table->foreign('fk_usuario_solicitado')->references('pk_usuario')->on('usuarios');
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
        Schema::dropIfExists('solicitudes');
    }
};
