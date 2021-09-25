<?php


namespace App\Models\Users\Resumes;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BaseResumeModel extends Model
{
    use HasFactory, SoftDeletes;

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
