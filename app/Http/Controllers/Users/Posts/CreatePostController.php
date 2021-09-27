<?php

namespace App\Http\Controllers\Users\Posts;

use App\Business\Users\Posts\CreatePostBusiness;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Users\Posts\CreatePostRequest;

class CreatePostController extends BaseController
{

    private $createPostBusiness;

    public function __construct(CreatePostBusiness $createPostBusiness)
    {
        $this->createPostBusiness = $createPostBusiness;
    }

    public function create(CreatePostRequest $request)
    {
        try {
            $attributes = $this->addUserIdToAttributes($request->validated());
            $this->createPostBusiness->create($attributes);
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
