<?php


namespace App\Models\Users\Posts;

use App\Models\Users\Posts\Interfaces\Likeable as LikeableContract;
use App\Models\Users\Posts\Traits\Likeable as LikeableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Likeable extends Model implements LikeableContract
{
    use HasFactory, SoftDeletes, LikeableTrait;
}
