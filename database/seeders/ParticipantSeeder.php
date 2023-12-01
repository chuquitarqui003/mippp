<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participant::create([
            'participante_estado'=>'Seleccionado',
            'student_id' => 1,
            'convocatory_id' => 1,
        ]);
    }
}
