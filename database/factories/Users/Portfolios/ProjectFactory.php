<?php

namespace Database\Factories\Users\Portfolios;

use App\Models\Users\Portfolios\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'link' => $this->faker->title(),
            'description' => $this->faker->text(),
        ];
    }
}
