<?php

namespace App;

use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\CounterTopType\Models\CounterTopType;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FlooringType\Models\FlooringType;
use App\Modules\Room\Models\Room;
use App\Modules\Feature\Models\Feature;
use Illuminate\Database\Eloquent\Model;

class ProjectToRoom extends Model
{
    protected $fillable=[
      'room_id',
      'project_id',
      'feature_option_id',
      'feature_id',
      'feature_issue_ids',
      'imageDesc',
      'images',
      'inspectionNotes',
      'flooring_types_id',
      'counter_top_types_id',
      'status',
        'additional',
        'type_id'
    ];




        public function room(){
            return $this->belongsTo(Room::class);
    }
    public function feature(){
        return $this->belongsTo(Feature::class,'feature_id');
    }
    public function featureOptions(){
        return $this->belongsTo(FeatureOption::class,'feature_option_id');
    }

    public function featureIssues(){

        return $this->belongsTo(FeatureIssue::class,'feature_issue_ids');
    }
    public function addtional(){

        return $this->belongsTo(AdditionalValue::class,'');
    }
    public function type(){

        return $this->belongsTo(Type::class,'type_id');
    }

}
