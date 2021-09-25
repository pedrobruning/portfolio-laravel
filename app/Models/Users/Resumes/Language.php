<?php

namespace App\Models\Users\Resumes;

use App\Models\Languages\Language as BaseLanguage;
use App\Models\Languages\LanguageLevel;

class Language extends BaseResumeModel
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
        return $this->belongsTo(BaseLanguage::class);
    }
}
