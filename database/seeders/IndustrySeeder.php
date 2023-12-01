<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industry::create([
            'industria_nombre'=>'Plaza Vea',
            'industria_ruc'=>'0988761167',
            'industria_direccion'=>'Jr. San Martin',
            'industria_telefono'=>'978223641',
            'industria_correo'=>'plaza.vea23@gmail.com',
            'student_id' => 1,
        ]);
    }
}
