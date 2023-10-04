<?php

namespace App\Modules\Project\Models;

use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\Professional\Models\Professional;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\Room\Models\Room;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\ServiceType\Models\ServiceType;
use App\ProjectToRoom;
use App\ProjectToType;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,
        'description',
        'start_date',
        'status',
        'customer_id',
        'service_type_id',
        'room_id',
        'realtor_id',
        'bid_status',
        'home_diagnostic_report_id',
    ];

    // relations


    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function serviceType(){
        return $this->belongsTo(ServiceType::class);
    }

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function roomFeature(){
        // Todo : might be deprecated
        return $this->belongsTo(Feature::class);
    }

    public function roomIssue(){
        return $this->belongsTo(RoomIssue::class);
    }

    public function images(){
        return $this->hasMany(ProjectImage::class);
    }

    public function features(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {

        return $this->belongsToMany(Feature::class)->withPivot('id');
    }

    public function featureIssues(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(
            FeatureProjectFeatureIssue::class,
            FeatureProject::class,
            'project_id',
            'feature_project_id',
            'id',
            'id');
    }

    public function projectopportunities(){
        return $this->hasMany(ProjectOpportunity::class,'project_id');
    }
    public function projectToroom(){
        return $this->hasMany(ProjectToRoom::class,'project_id');
    }
    public function projecttotype(){
        return $this->hasMany(ProjectToType::class,'project_id');
    }

    public function homediagnostic()
    {
       return $this->belongsTo(HomeDiagnosticReport::class,'home_diagnostic_report_id');
    }
}
