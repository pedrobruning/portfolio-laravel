<?php

namespace App\Models\Portfolios;

class Project extends BasePortfolioModel
{
    protected $table = 'portfolio_projects';

    protected $fillable = [
        'title', 'link', 'description', 'user_id'
    ];
}
