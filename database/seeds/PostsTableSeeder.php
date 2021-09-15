<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
            $newPost= new Post();

            $newPost->title = 'Post numero'. ($i+1);
            $newPost->slug = Str::of($newPost->title)->slug('-');
            $newPost->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora inventore earum incidunt cupiditate enim quasi doloribus quod dolor a adipisci non officiis, at fugiat id cum saepe quos? Nesciunt, ratione.';

            $newPost->save();
        }
    }
}
