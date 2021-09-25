<?php


namespace App\Models\Users\Posts;

use App\Models\Users\User;

abstract class BasePostModel extends Likeable
{
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
