<?php

namespace App\Models\Resumes;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resume extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'resumes';

    protected $fillable = [
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hobbies()
    {
        return $this->hasMany(ResumeHobbie::class);
    }

    public function jobs()
    {
        return $this->hasMany(ResumeJob::class);
    }

    public function educations()
    {
        return $this->hasMany(ResumeEducation::class);
    }
}
