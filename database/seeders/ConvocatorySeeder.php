<?php

namespace Database\Seeders;

use App\Models\Convocatory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvocatorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Convocatory::create([
            'convocatoria_descripcion'=>'Se busca Ing en Redes
            especialista en diferentes campos laborales',
            'convocatoria_estado'=>'Activo',
            'convocatoria_fecha_inicio'=>'11/11/23',
            'convocatoria_fecha_fin'=>'11/12/23',
            'convocatoria_cupo'=>'3',
            'company_id' => 1,
        ]);

        Convocatory::create([
            'convocatoria_descripcion'=>'Se parte del mas innovador
            centro de desarrollo Front-End',
            'convocatoria_estado'=>'Activo',
            'convocatoria_fecha_inicio'=>'11/11/23',
            'convocatoria_fecha_fin'=>'11/12/23',
            'convocatoria_cupo'=>'3',
            'company_id' => 2,
        ]);

        Convocatory::create([
            'convocatoria_descripcion'=>'Se parte del mas innovador
            centro de desarrollo Back-End',
            'convocatoria_estado'=>'Activo',
            'convocatoria_fecha_inicio'=>'11/11/23',
            'convocatoria_fecha_fin'=>'11/12/23',
            'convocatoria_cupo'=>'3',
            'company_id' => 3,
        ]);


    }
}
