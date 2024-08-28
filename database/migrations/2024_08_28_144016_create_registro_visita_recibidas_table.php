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
        Schema::create('registro_visita_recibidas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_visita');

            $table->unsignedBigInteger('clase_visita_id');
            $table->foreign('clase_visita_id')->references('id')->on('clase_de_visitas');
            
            $table->unsignedBigInteger('registro_inicio_id');
            $table->foreign('registro_inicio_id')->references('id')->on('registro_inicials');
            
            $table->unsignedBigInteger('registro_fin_id');
            $table->foreign('registro_fin_id')->references('id')->on('registro_finals');

            $table->unsignedBigInteger('visitante_id');
            $table->foreign('visitante_id')->references('id')->on('visitantes');

            $table->unsignedBigInteger('empleado_id');
            $table->foreign('empleado_id')->references('id')->on('empleados');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_visita_recibidas');
    }
};
