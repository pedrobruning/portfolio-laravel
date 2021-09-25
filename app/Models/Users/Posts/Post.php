<?php

namespace App\Models\Users\Posts;

use App\Models\Users\Posts\Comments\Comment;
use App\Models\Users\User;

class Post extends Likeable
{
    protected $table = 'posts';

    protected $fillable = [
        'title', 'description', 'likes', 'dislikes'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
