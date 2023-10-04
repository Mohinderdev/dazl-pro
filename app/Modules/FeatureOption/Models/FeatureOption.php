<?php

namespace App\Modules\FeatureOption\Models;

use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Feature\Models\Feature;
use App\Score;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;

class FeatureOption extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'feature_id'
    ];

    // relations

    public function feature(){
        return $this->belongsTo(Feature::class);
    }
    public function serviceType(){
        return $this->belongsTo(ServiceType::class);
    }
    public function featureissues(){
        return $this->hasMany(FeatureIssue::class,'feature_option_id');
    }
    public function featurescore(){
        return $this->hasMany(Score::class,'feature_option_id');
    }
}
