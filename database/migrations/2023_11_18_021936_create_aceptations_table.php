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
        Schema::create('aceptations', function (Blueprint $table) {
            $table->id();

            $table->text('carta_aceptacion_estado');
            $table->text('carta_aceptacion_ruta');
            $table->text('carta_aceptacion_fecha_envio');
            $table->text('carta_aceptacion_hora_envio');

            $table->unsignedBigInteger('participant_id');
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aceptations');
    }
};
