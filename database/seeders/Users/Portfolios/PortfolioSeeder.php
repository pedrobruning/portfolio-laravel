<?php

namespace Database\Seeders\Users\Portfolios;

use App\Models\Users\Portfolios\Portfolio;
use App\Models\Users\Portfolios\Project;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    const USER_ID = [
        'user_id' => 1
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::factory(self::USER_ID)
            ->has(Project::factory(self::USER_ID)->count(4))
            ->create();
    }
}
