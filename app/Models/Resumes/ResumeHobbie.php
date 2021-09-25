<?php

namespace App\Models\Resumes;

use App\Models\User;

class ResumeHobbie extends BaseResumeModel
{
    protected $table = 'resume_hobbies';

    protected $fillable = [
        'name', 'user_id'
    ];
}
