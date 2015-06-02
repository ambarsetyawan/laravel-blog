<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Article;

class ArticleTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('articles')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 15; $i++) {
            Article::create([
                'title'         => $faker->sentence(3),
                'body'          => $faker->paragraph(20),
                'user_id'       => 1,
                'category_id'   => 1,
            ]);
        }

    }

}