<?php

namespace App\Models\Users\Resumes;

class Hobbie extends BaseResumeModel
{
    protected $table = 'resume_hobbies';

    protected $fillable = [
        'name', 'user_id'
    ];
}
