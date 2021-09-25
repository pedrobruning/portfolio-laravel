<?php

namespace App\Models\Resumes;

class Hobbie extends BaseResumeModel
{
    protected $table = 'resume_hobbies';

    protected $fillable = [
        'name', 'user_id'
    ];
}
