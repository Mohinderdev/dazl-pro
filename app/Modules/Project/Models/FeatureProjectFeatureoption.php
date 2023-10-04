<?php

namespace App\Modules\Project\Models;

use App\Modules\FeatureIssue\Models\FeatureOption;
use Illuminate\Database\Eloquent\Model;

class FeatureProjectFeatureoption extends Model
{
    protected $table = 'feature_project_featureoptions';

    protected $fillable = [
        'feature_project_id',
        'feature_option_id',
        'description'
    ];
    // relations

    public function featureOption(){
        return $this->belongsTo(FeatureOption::class);
    }

    public function featureProject(){
        return $this->belongsTo(FeatureProject::class);
    }
}
