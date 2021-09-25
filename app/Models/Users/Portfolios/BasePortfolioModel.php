<?php


namespace App\Models\Users\Portfolios;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class BasePortfolioModel extends Model
{
    use HasFactory, SoftDeletes;

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
