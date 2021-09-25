<?php

namespace App\Models\Users\Posts\Traits;

trait Likeable
{
    public function like()
    {
        $this->update([
            'likes' => $this->getLikes() + 1
        ]);
    }

    public function dislike()
    {
        $this->update([
            'dislikes' => $this->getDislikes() + 1
        ]);
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function getDislikes()
    {
        return $this->dislikes;
    }
}
