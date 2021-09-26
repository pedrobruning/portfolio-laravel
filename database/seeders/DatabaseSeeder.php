<?php

namespace Database\Seeders;

use Database\Seeders\Users\BaseUserSeeder;
use Database\Seeders\Users\Portfolios\PortfolioSeeder;
use Database\Seeders\Users\Posts\PostSeeder;
use Database\Seeders\Users\Resumes\ResumeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            LanguageLevelSeeder::class,
            LanguageSeeder::class,
            BaseUserSeeder::class,
            ResumeSeeder::class,
            PostSeeder::class,
            PortfolioSeeder::class
        ]);
    }
}
