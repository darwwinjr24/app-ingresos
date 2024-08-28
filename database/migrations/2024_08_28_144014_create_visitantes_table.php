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
        Schema::create('visitantes', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('empresa');

            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');

            $table->unsignedBigInteger('autorizado_id');
            $table->foreign('autorizado_id')->references('id')->on('autorizados');

            $table->unsignedBigInteger('datos_personales_id');
            $table->foreign('datos_personales_id')->references('id')->on('dato_personals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitantes');
    }
};
