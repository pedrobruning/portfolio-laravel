<?php

namespace Database\Factories\Languages;

use App\Models\Languages\LanguageLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageLevelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LanguageLevel::class;

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
