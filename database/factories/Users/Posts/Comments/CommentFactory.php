<?php

namespace Database\Factories\Users\Posts\Comments;

use App\Models\Users\Posts\Comments\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(),
            'likes' => $this->faker->numberBetween(0, 215),
            'dislikes' => $this->faker->numberBetween(0, 215),
        ];
    }
}
