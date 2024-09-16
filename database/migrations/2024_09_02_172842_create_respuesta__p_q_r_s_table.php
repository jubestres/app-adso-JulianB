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
        Schema::create('respuesta_p_q_r_s', function (Blueprint $table) {
            $table->id();
            $table->string("respuestacliente");
            $table->unsignedBigInteger('id_clientes');
 
            $table->foreign('id_clientes')->references('id')->on('clientes');

            $table->unsignedBigInteger('id_radicado_p_q_r_s');
 
            $table->foreign('id_radicado_p_q_r_s')->references('id')->on('radicado_p_q_r_s');

            $table->unsignedBigInteger('id_area_respuestas');
 
            $table->foreign('id_area_respuestas')->references('id')->on('area_respuestas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuesta_p_q_r_s');
    }
};
