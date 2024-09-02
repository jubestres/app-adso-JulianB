<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('respuesta__p_q_r_s', function (Blueprint $table) {
            $table->id();
            $table->string("respuestacliente");
            $table->unsignedBigInteger('id_cliente');
 
            $table->foreign('id_cliente')->references('id')->on('clientes');

            $table->unsignedBigInteger('id_radicadopqr');
 
            $table->foreign('id_radicadopqr')->references('id')->on('radicado__p_q_r_s');

            $table->unsignedBigInteger('id_arearespuesta');
 
            $table->foreign('id_arearespuesta')->references('id')->on('area__respuestas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuesta__p_q_r_s');
    }
};
