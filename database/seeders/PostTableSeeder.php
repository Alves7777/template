<?php

namespace Database\Seeders;

use App\Models\Post\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    CONST QUANTITY = 100;

    public function run()
    {
        Post::factory()->count(self::QUANTITY)->create();
    }
}
