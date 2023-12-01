<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         History::create([
            'claveMateria'=>'Matematica',
            'calificacion'=>'12',
            'semes'=>'Primero',



        ]);
        History::create([
            'claveMateria'=>'Calculo',
            'calificacion'=>'16',
            'semes'=>'Segundo ',


        ]);
        History::create([
            'claveMateria'=>'Fisica',
            'calificacion'=>'19',
            'semes'=>'Segundo ',


        ]);
        History::create([
            'claveMateria'=>'Anatomia',
            'calificacion'=>'20',
            'semes'=>'Segundo',


        ]);

    }
}
