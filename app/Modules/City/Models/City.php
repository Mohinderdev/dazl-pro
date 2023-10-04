<?php

namespace App\Modules\City\Models;

use App\Modules\Country\Models\Country;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'country_id', 'is_active'
    ];

    // relations
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * Active scope.
     * @param $query
     */

    public function scopeActive($query)
    {
        $query->whereIsActive(1);
    }

}
