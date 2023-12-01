<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'empresa_nombre'=>'Plaza Vea',
            'empresa_ruc'=>'0988761167',
            'empresa_direccion'=>'Jr. San Martin',
            'empresa_telefono'=>'978223641',
            'empresa_correo'=>'plaza.vea23@gmail.com',
        ]);

        Company::create([
            'empresa_nombre'=>'Tiendas efe',
            'empresa_ruc'=>'0923762467',
            'empresa_direccion'=>'Jr. Simon Bolivar',
            'empresa_telefono'=>'971123641',
            'empresa_correo'=>'tiendas.efe11@gmail.com',
        ]);

        Company::create([
            'empresa_nombre'=>'Ugel San Roman',
            'empresa_ruc'=>'1122751167',
            'empresa_direccion'=>'Av. San Siro',
            'empresa_telefono'=>'990567834',
            'empresa_correo'=>'sanroman-ugel299@gmail.com',
        ]);
    }
}
