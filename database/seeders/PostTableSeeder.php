<?php

namespace Database\Seeders;

use App\Models\Post\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    CONST QUANTITY = 100;

    public function run()
    {
        // Alves Imported
        Post::factory()->count(self::QUANTITY)->create([
            'client_id' => 1 // AbstractView::DEFAULT_CLIENT_ID, se disponível no model
        ]);

        // AM Pratas
        Post::factory()->count(10)->create([
            'client_id' => 2 // AbstractView::AM_PRATAS, se disponível no model
        ]);
    }
}
