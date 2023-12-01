<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Matery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materys=Matery::factory(4)->create();
        foreach ($materys as $matery) {
            Image::factory(1)->create([
                'imageable_id'=>$matery->id,
                'imageable_type'=>Article::class
            ]);
    }
}}
