<?php

namespace App\Modules\Room\Models;

use App\Modules\Feature\Models\Feature;
use Illuminate\Database\Eloquent\Model;

class Room_To_Feature extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'room_to_feature';


    // relations

    public function features(){
        return $this->hasMany(Feature::class);
    }
}


