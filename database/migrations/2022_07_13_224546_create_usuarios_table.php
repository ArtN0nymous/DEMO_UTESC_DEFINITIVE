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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id("pk_usuario");
            $table->char('telefono',13);
            $table->char('email',30);
            $table->char('estatus',45);
            $table->text('token_g',100);
            $table->char('password',20);
            $table->unsignedBigInteger('fk_puesto');
            $table->foreign('fk_puesto')->references('pk_puesto')->on('puestos');
            $table->unsignedBigInteger('fk_persona');
            $table->foreign('fk_persona')->references('pk_persona')->on('personas');
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
        Schema::dropIfExists('usuarios');
    }
};
