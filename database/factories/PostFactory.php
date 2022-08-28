<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => '<p>'. implode('</p><p>', fake()->paragraphs(2))  .'</p>',
            'body' => '<p>'. implode('</p><p>', fake()->paragraphs(7))  .'</p>'

        ];
    }
}
