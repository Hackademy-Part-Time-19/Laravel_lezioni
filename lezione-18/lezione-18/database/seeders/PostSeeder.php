<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::factory(100)->create();

        // $this->setRelation();
    }

    public function setRelation(){

        $posts = Post::all();

        foreach($posts as $post){

            $post->update(['user_id'=>rand(1,10)]);

        }


    }
}
