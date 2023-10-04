<?php

namespace App\Modules\Realtor\Models;

use App\Modules\Payment\Models\Payment;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Realtor extends Authenticatable implements JWTSubject
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name' ,
        'last_name' ,
        'phone_number' ,
        'real_state_agency_name' ,
        'city_of_real_state_agency' ,
        'state' ,
        'zip_code' ,
        'email' ,
        'password' ,
    ];

    protected $hidden = [
        'password'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    // relations

    public function payment(){
        return $this->morphOne(Payment::class,'userable');
    }
}
