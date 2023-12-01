<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles=Article::factory(1)->create();
        foreach ($articles as $article) {
            Image::factory(1)->create([
                'imageable_id'=>$article->id,
                'imageable_type'=>Article::class
            ]);
    }
}
}
