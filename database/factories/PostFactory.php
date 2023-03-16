<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
   
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(),
            'title' => $this->faker->title(),
            'body' => $this->faker->paragraph()
        ];
    }
}
