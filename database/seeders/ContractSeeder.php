<?php

namespace Database\Seeders;

use App\Models\Contract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::create([
            'convenio_estado'=>'Validado',
            'convenio_ruta'=>'convenio/?ref=top/yerald',
            'convenio_fecha_envio'=>'25/11/2023',
            'convenio_hora_envio'=>'17:20',

            'participant_id' => 1,
        ]);
    }
}
