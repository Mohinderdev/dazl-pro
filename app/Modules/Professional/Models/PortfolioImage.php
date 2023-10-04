<?php

namespace App\Modules\Professional\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'professional_id'

    ];

    // relations
}
