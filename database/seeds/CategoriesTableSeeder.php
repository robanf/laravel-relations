<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =['html', 'css', 'php', 'js','phyton','vue',];

        foreach($categories as $item){
            $newCategori= new Category;

            $newCategori->name=$item;
            $newCategori->slug = Str::of($item)->slug('-');

            $newCategori->save();
        }
    }
}
