<?php

namespace App\Models\Resumes;

use App\Models\Languages\Language;
use App\Models\Languages\LanguageLevel;
use App\Models\User;

class ResumeLanguage extends BaseResumeModel
{
    protected $table = 'resume_languages';

    protected $fillable = [
        'user_id', 'language_level_id', 'language_id'
    ];

    public function level()
    {
        return $this->belongsTo(LanguageLevel::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
