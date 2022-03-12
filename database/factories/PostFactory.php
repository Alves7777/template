<?php

namespace Database\Factories;

use App\Models\Post\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->unique()->word,
            'body' => $this->faker->sentence()
        ];
    }
}
