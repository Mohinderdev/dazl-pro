<?php

namespace App\Modules\HomeDiagnosticReport\Models;

use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureOption\Models\FeatureOption;
use Illuminate\Database\Eloquent\Model;

class HomeDiagnosticReportFeatureOption extends Model
{
    protected $table = 'feature_home_diagnostic_report_feature_options';

    protected $fillable = [
        'feature_home_diagnostic_report_id',
        'feature_option_id'
    ];
    // relations

    public function featureOption(){
        return $this->belongsTo(FeatureOption::class);
    }

    public function featureReport(){
        return $this->belongsTo(FeatureHomeDiagnosticReport::class);
    }
}
