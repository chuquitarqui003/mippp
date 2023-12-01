<?php

namespace Database\Seeders;

use App\Models\Aceptation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AceptationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aceptation::create([
            'carta_aceptacion_estado'=>'Validado',
            'carta_aceptacion_ruta'=>'carta-aceptacion/?ref=top/yerald',
            'carta_aceptacion_fecha_envio'=>'21/11/2023',
            'carta_aceptacion_hora_envio'=>'12:40',

            'participant_id' => 1,
        ]);
    }
}
