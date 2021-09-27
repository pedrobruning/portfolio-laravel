<?php

namespace App\Http\Controllers\Users\Posts;

use App\Business\Users\Posts\ShowPostBusiness;
use App\Http\Controllers\Controller;

class ShowPostController extends Controller
{

    private $showPostBusiness;

    public function __construct(ShowPostBusiness $showPostBusiness)
    {
        $this->showPostBusiness = $showPostBusiness;
    }

    public function list()
    {
        $posts = $this->showPostBusiness->listAllPosts();
        return view('users.posts.index', compact('posts'));
    }
}
