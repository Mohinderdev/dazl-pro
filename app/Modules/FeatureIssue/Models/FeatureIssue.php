<?php

namespace App\Modules\FeatureIssue\Models;

use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;

class FeatureIssue extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'feature_id',
        'issue_id',
        'service_type_id',
        'feature_option_id'
    ];

    // relations

    public function feature(){
        return $this->belongsTo(Feature::class);
    }


    public function serviceType(){
        return $this->belongsTo(ServiceType::class);
    }


}
