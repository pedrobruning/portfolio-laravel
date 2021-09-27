<?php


namespace App\Business\Users\Posts;


use App\Repositories\Users\Posts\PostRepository;

class BasePostBusiness
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
}
