<?php

namespace App\Modules\Company\Models;

use App\Modules\Professional\Models\PortfolioImage;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'website',
        'address',
        'references',
        'description',
        'business_licence',
        'project_portfolio',
        'years_in_business',
        'insurance_certificate',
        'insurance_number',
        'insurance_contact_number',
        'facebook',
        'twitter',
        'images1',
        'images2',
        'images3',
        'images4',
    ];
    public function images(){

        return $this->hasMany(PortfolioImage::class);
    }
    // relations

}
