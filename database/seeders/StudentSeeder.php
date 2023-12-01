<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'estudiante_nombre'=>'Yerald',
            'estudiante_ap_materno'=>'Sanchez',
            'estudiante_ap_paterno'=>'Saravia',
            'estudiante_codigo'=>'202212461',
            'people_id' => 1,
        ]);
    }
}
