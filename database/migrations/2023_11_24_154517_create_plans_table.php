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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();

            $table->text('plan_f_inicio_plan');
            $table->text('plan_f_fin_plan');
            $table->text('plan_horas_planificadas');
            $table->text('plan_semanas_planificadas');
            $table->text('plan_modalidad');
            $table->text('plan_turnos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
