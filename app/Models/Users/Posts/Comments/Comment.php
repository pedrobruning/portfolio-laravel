<?php

namespace App\Models\Users\Posts\Comments;

use App\Models\Users\Posts\Likeable;
use App\Models\Users\Posts\Post;
use App\Models\User;

class Comment extends Likeable
{
    protected $table = 'post_comments';

    protected $fillable = [
        'description', 'likes', 'dislikes', 'user_id', 'commenter_id'
    ];

    public function commenter()
    {
        return $this->belongsTo(User::class, 'commenter_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}
