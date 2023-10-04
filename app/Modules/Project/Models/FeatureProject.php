<?php

namespace App\Modules\Project\Models;

use App\Modules\Feature\Models\Feature;
use Illuminate\Database\Eloquent\Model;

class FeatureProject extends Model
{
    protected $table = 'feature_project';
    // relations

    public function feature(){
        return $this->belongsTo(Feature::class);
    }

}
