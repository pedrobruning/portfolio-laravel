<?php

namespace Database\Factories\Users\Resumes;

use App\Models\Users\Resumes\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Education::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'institution' => $this->faker->company(),
            'location' => $this->faker->streetName(),
            'description' => $this->faker->text(),
            'major' => $this->faker->name(),
            'degree' => $this->faker->name(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'current_attend' => $this->faker->boolean(),
        ];
    }
}
