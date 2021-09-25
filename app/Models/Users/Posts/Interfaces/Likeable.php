<?php

namespace App\Models\Users\Posts\Interfaces;

interface Likeable
{
    public function like();

    public function dislike();

    public function getLikes();

    public function getDislikes();
}
