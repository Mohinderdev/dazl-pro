<?php

namespace App\Modules\User\Models;

use App\Modules\City\Models\City;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;
use App\Modules\Country\Models\Country;
use App\Modules\User\Models\BrokerData;
use Illuminate\Notifications\Notifiable;
use App\Modules\User\Models\DeveloperData;
use App\Modules\User\Models\IndividualData;
use App\Modules\Models\ResetPassword\ResetPassword;
use App\Modules\Models\Unit\Unit;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{

    use HasApiTokens, Notifiable;

    protected $hidden = [
        'password'
    ];

    protected $fillable = [
        'name' , 'email' , 'password' , 'phone'
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims():array
    {
        return [];
    }
}
