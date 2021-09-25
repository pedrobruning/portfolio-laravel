<?php

namespace App\Models\Resumes;

use App\Models\User;

class Job extends BaseResumeModel
{
    protected $table = 'resume_jobs';

    protected $fillable = [
        'title', 'company', 'description', 'start_date', 'end_date', 'current_job', 'user_id'
    ];

    protected $dates = [
        'start_date', 'end_date'
    ];
}
