<?php

namespace App\Modules\Room\Models;

use App\Modules\Room\Models\Room_To_Feature;
use App\Modules\FeatureIssues\Models\FeatureIssues;
use App\Modules\FeatureOptions\Models\FeatureOptions;
use App\Modules\Feature\Models\Feature;
use App\RoomToAdditional;
use App\RoomToType;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','images',
        'name','percentage',
    ];

    // relations

    public function features(){

        return $this->hasMany(Room_To_Feature::class,'room_id');
    }
    public function additional(){

        return $this->hasMany(RoomToAdditional::class,'room_id');
    }
    public function type(){

        return $this->hasMany(RoomToType::class,'room_id');
    }
    public function featuresname($id){


        return Feature::where('id',$id);
    }
    public function featurename(){

        return $this->hasMany(Feature::class);
    }
}
