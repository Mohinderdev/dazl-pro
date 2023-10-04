<?php

namespace App\Modules\Professional\Models;

use App\Modules\Company\Models\Company;
use App\Modules\Payment\Models\Payment;
use App\Modules\Professional\Models\PortfolioImage;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Professional extends Authenticatable implements JWTSubject
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
        'company_name' ,
          'password',
        'company_street_address' ,
        'company_city' ,
        'state' ,
        'zip_code' ,
        'email' ,
        'company_id' ,
        'business_licence',
        'insurance_licence',
        'project_portfolio',
        'website'
    ];

    protected $hidden =[
        'password'
    ];

    // relations

    public function serviceTypes(){
        return $this->belongsToMany(ServiceType::class);
    }

    public function payment(){
        return $this->morphOne(Payment::class,'userable');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

}
