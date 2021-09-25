<?php

namespace Database\Factories\Users\Posts;

use App\Models\Users\Posts\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'likes' => $this->faker->numberBetween(0, 215),
            'dislikes' => $this->faker->numberBetween(0, 215),
        ];
    }
}
