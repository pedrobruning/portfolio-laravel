<?php

namespace App\Models\Languages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageLevel extends Model
{
    use HasFactory;

    protected $table = 'language_levels';

    protected $fillable = [
        'name'
    ];
}
