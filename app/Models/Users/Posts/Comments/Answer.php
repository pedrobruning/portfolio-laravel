<?php

namespace App\Models\Users\Posts\Comments;

use App\Models\Users\Posts\BasePostModel;
use App\Models\Users\User;

class Answer extends BasePostModel
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
