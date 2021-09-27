<?php


namespace App\Business\Users\Posts;


class ShowPostBusiness extends BasePostBusiness
{
    public function listAllPosts()
    {
        return $this->postRepository->getAll();
    }
}
