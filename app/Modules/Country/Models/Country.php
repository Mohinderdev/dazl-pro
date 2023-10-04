<?php

namespace App\Modules\Country\Models;

use App\Modules\City\Models\City;
use App\Modules\Currency\Models\Currency;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'currency_id', 'flag'
    ];

    // relations
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    // public function setFlagAttribute($flag)
    // {
    //     $flag = request()->file('flag')->store('uploads/countries');
    //     $this->attributes['flag'] = $flag;
    // }

}
