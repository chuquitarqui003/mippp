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
        Schema::create('materies', function (Blueprint $table) {
            $table->id();

            $table->text('nombre');
            $table->text('creditos');
            $table->text('tipo');
            $table->text('etapa');
            $table->text('semestre');
            $table->unsignedBigInteger('history_id');
            $table->foreign('history_id')->references('id')->on('histories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materies');
    }
};
