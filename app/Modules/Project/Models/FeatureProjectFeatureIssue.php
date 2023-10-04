<?php

namespace App\Modules\Project\Models;

use App\Modules\FeatureIssue\Models\FeatureIssue;
use Illuminate\Database\Eloquent\Model;

class FeatureProjectFeatureIssue extends Model
{
    protected $table = 'feature_project_feature_issue';

    protected $fillable = [
        'feature_project_id',
        'feature_issue_id',
        'description'
    ];
    // relations

    public function featureIssue(){
        return $this->belongsTo(FeatureIssue::class);
    }

    public function featureProject(){
        return $this->belongsTo(FeatureProject::class);
    }
}
