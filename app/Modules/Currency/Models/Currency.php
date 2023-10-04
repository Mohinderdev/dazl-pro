<?php

namespace App\Modules\Currency\Models;

use App\Modules\Country\Models\Country;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }

}
