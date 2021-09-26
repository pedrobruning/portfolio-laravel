<?php

namespace Database\Seeders;

use App\Models\Languages\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::factory()->count(15)->create();
    }
}
