<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'plan_f_inicio_plan'=>'24/11/23',
            'plan_f_fin_plan'=>'24/01/24',
            'plan_horas_planificadas'=>'300',
            'plan_semanas_planificadas'=>'6',
            'plan_modalidad'=>'prescencial',
            'plan_turnos'=>'2',
        ]);




    }
}
