<?php

namespace Database\Seeders;

use App\Models\Post\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    CONST QUANTITY = 100;

    public function run()
    {
        $client = \App\Models\Client::where('slug', 'default-client')->first();
        Post::factory()->count(self::QUANTITY)->create([
            'client_id' => $client ? $client->id : 1
        ]);
    }
}
