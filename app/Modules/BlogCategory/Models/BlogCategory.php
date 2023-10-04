<?php

namespace App\Modules\BlogCategory\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug'

    ];

    // relations

}
