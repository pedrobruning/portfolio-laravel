<?php

namespace App\Models\Users\Posts\Comments;

use App\Models\User;
use App\Models\Users\Posts\Likeable;

class Answer extends Likeable
{
    protected $table = 'post_comment_answers';

    protected $fillable = [
        'description', 'likes', 'dislikes', 'answerer_id'
    ];

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function answerer()
    {
        return $this->belongsTo(User::class, 'answerer_id', 'id');
    }
}
