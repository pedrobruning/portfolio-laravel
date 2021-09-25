<?php

namespace App\Models\Resumes;

class ResumeEducation extends BaseResumeModel
{
    protected $table = 'resume_educations';

    protected $fillable = [
        'institution', 'location', 'description', 'major', 'degree', 'start_date', 'end_date', 'current_attend', 'user_id'
    ];

    protected $dates = [
        'start_date', 'end_date'
    ];
}
