<?php


namespace App\Business\Users\Posts;

class CreatePostBusiness extends BasePostBusiness
{
    public function create(array $attributes)
    {
        $this->postRepository->create($attributes);
    }
}
