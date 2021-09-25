<?php

namespace Database\Factories\Users\Resumes;

use App\Models\Users\Resumes\Hobbie;
use Illuminate\Database\Eloquent\Factories\Factory;

class HobbieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hobbie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
