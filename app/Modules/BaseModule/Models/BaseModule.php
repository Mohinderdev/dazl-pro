<?php

namespace App\Modules\BaseModule\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModule extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    // relations

}
