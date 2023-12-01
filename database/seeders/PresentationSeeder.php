<?php

namespace Database\Seeders;

use App\Models\Presentation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Presentation::create([
            'carta_presentacion_estado'=>'Recibido',
            'carta_presentacion_ruta'=>'carta-presentacion/?ref=top/yerald',
            'carta_presentacion_fecha_solicitud'=>'10/11/23',
            'carta_presentacion_fecha_recibida'=>'20/11/23',

            'student_id' => 1,
        ]);
    }
}
