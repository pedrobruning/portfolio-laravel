<?php

namespace Database\Seeders\Users\Resumes;

use App\Models\User;
use App\Models\Users\Resumes\Hobbie;
use App\Models\Users\Resumes\Job;
use App\Models\Users\Resumes\Language as ResumeLanguage;
use App\Models\Users\Resumes\Resume;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    const BASE_USER = 1;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userId = $this->getBaseUserId();
        Resume::factory($userId)
            ->has(Hobbie::factory($userId)->count(4))
            ->has(Job::factory($userId)->count(3))
            ->hasEducations(4, $userId)
            ->has(ResumeLanguage::factory($userId)->count(3))
            ->create();
    }

    private function getBaseUserId(): array
    {
        $user = User::find(self::BASE_USER);

        return [
            'user_id' => $user->id
        ];
    }
}
