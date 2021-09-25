<?php

namespace App\Models\Users\Resumes;

use App\Models\Users\User;
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
        return $this->hasMany(Hobbie::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }
}
