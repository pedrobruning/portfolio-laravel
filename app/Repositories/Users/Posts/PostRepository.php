<?php


namespace App\Repositories\Users\Posts;


use App\Models\Users\Posts\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository
{
    public function __construct(Post $post)
    {
        parent::__construct($post);
    }
}
