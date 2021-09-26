<?php

namespace Database\Seeders;

use App\Models\Languages\LanguageLevel;
use Illuminate\Database\Seeder;

class LanguageLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LanguageLevel::insert([
            ['name' => 'Beginner'],
            ['name' => 'Mid Level'],
            ['name' => 'Intermediate'],
            ['name' => 'Advanced']
        ]);
    }
}
