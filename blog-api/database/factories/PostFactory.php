<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->words(2, true),
            'content' => $this->faker->text(),
        ];
    }
}
