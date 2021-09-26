<?php

namespace Database\Seeders\Users\Posts;

use App\Models\User;
use App\Models\Users\Posts\Comments\Answer;
use App\Models\Users\Posts\Comments\Comment;
use App\Models\Users\Posts\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
        Post::factory(self::USER_ID)
            ->has($this->getCommentFactory())
            ->count(5)->create();
    }


    private function getCommentFactory()
    {
        return Comment::factory([ 'commenter_id' => 1])
            ->has($this->getAnswerFactory())
            ->count(4);
    }

    private function getAnswerFactory()
    {
        return Answer::factory(['answerer_id' => 1])->count(3);
    }
}
