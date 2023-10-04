<?php

namespace App\Modules\HomeDiagnosticReport\Models;

use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\House\Models\House;
use App\Modules\Project\Models\Project;
use App\Modules\Realtor\Models\Realtor;
use Illuminate\Database\Eloquent\Model;

class HomeDiagnosticReport extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'house_id',
        'highest_price',
        'lowest_price',
        'description',
        'score'
    ];

    // relations
    public function house(){
        return $this->belongsTo(House::class);
    }
    public function project(){
        return $this->hasMany(Project::class,'home_diagnostic_report_id');
    }

    public function images(){
        return $this->hasMany(HomeDiagnosticReportImage::class);
    }

    public function features(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Feature::class)->withPivot('id');
    }
    public function featureshomediagnosticreport(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(FeatureOption::class)->withPivot('id');
    }

}
