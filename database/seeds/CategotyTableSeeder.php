<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->delete();

        Category::create([
            'name'      => 'News',
        ]);
        Category::create([
            'name'      => 'Sport',
        ]);
        Category::create([
            'name'      => 'Films',
        ]);
    }

}