<?php

namespace App\Modules\HomeDiagnosticReport\Models;

use App\Modules\Feature\Models\Feature;
use Illuminate\Database\Eloquent\Model;

class FeatureHomeDiagnosticReport extends Model
{
    protected $table = 'feature_home_diagnostic_report';
    // relations

    public function feature(){
        return $this->belongsTo(Feature::class);
    }

}
