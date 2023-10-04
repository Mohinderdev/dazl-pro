<?php

namespace App\Modules\Feature\Models;

use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\Room\Models\Room;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' ,'room_id'
    ];

    // relations

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function featureOptions(){
        return $this->hasMany(FeatureOption::class);
    }

    public function featureIssues(){
        return $this->hasMany(FeatureIssue::class);
    }
}
