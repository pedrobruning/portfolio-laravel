<?php

namespace Database\Factories\Users\Resumes;

use App\Models\Languages\LanguageLevel;
use App\Models\Users\Resumes\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Languages\Language as LanguageModel;

class LanguageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Language::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'language_id' => $this->getRandomLanguageId(),
            'language_level_id' => $this->getRandomLanguageLevelId(),
        ];
    }

    private function getRandomLanguageId(): int
    {
        $result = (LanguageModel::all())->random(1);
        return ($result->random(1))[0]->id;
    }

    private function getRandomLanguageLevelId(): int
    {
        $result = (LanguageLevel::all())->random(1);
        return ($result->random(1))[0]->id;
    }
}
