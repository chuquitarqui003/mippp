<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        People::create([
            'persona_nombre'=>'Yerald',
            'persona_ap_paterno'=>'Sanchez',
            'persona_ap_materno'=>'Saravia',
            'persona_sexo'=>'M',
            'persona_direccion'=>'Av. Infancia N°300',
        ]);
    }
}
