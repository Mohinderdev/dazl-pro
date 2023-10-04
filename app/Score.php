<?php

namespace App;

use App\Modules\FeatureIssue\Models\FeatureIssue;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = [];

    public function featureissues(){
        return $this->hasMany(FeatureIssue::class,'feature_option_id');
    }
}
