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
        Schema::create('registro_ingreso_visitantes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('visitante_id');
            $table->foreign('visitante_id')->references('id')->on('visitantes');

            $table->unsignedBigInteger('registro_inicio_id');
            $table->foreign('registro_inicio_id')->references('id')->on('registro_inicials');

            $table->unsignedBigInteger('registro_fin_id');
            $table->foreign('registro_fin_id')->references('id')->on('registro_finals');

            $table->unsignedBigInteger('area_a_visitar_id');
            $table->foreign('area_a_visitar_id')->references('id')->on('area_a_visitars');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_ingreso_visitantes');
    }
};
