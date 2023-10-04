<?php

namespace App;

use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureOption\Models\FeatureOption;
use Illuminate\Database\Eloquent\Model;

class ProjectToType extends Model
{
    protected $guarded =[];

    public function feature(){
        return $this->belongsTo(Feature::class,'type_id');
    }
    public function featureOptions(){
        return $this->belongsTo(FeatureOption::class,'sub_type_id');
    }
}
