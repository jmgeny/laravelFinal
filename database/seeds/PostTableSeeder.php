<?php

use Illuminate\Database\Seeder;
use soyDeporte\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,10)->create();
    }
}
