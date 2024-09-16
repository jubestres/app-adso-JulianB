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
        Schema::create('p_q_r_s', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha_radicacion'); 
            $table->string('Descripcion');

            $table->unsignedBigInteger('id_clientes');
 
            $table->foreign('id_clientes')->references('id')->on('clientes');

            $table->unsignedBigInteger('id_tipo_solicituds');
 
            $table->foreign('id_tipo_solicituds')->references('id')->on('tipo_solicituds');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_q_r_s');
    }
};
