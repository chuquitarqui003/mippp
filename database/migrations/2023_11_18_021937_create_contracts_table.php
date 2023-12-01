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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->text('convenio_estado');
            $table->text('convenio_ruta');
            $table->text('convenio_fecha_envio');
            $table->text('convenio_hora_envio');

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
        Schema::dropIfExists('contracts');
    }
};
