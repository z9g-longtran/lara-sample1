<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(\App\Post::class, 10000)->create(); //120s

        $posts = factory(\App\Post::class, 10000)->make();
        $post1 = [];
        foreach ($posts as $post) {
            $post->created_at=now();
            $post->updated_at=now();
            $post1[] = $post->toArray();
        }
        \App\Post::insert($post1);//2s
        // \App\Post::create($post1[1]);
    }
}
