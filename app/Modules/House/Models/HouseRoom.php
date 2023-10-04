<?php

namespace App\Modules\House\Models;

use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\Professional\Models\Professional;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\Room\Models\Room;
use App\Modules\RoomIssue\Models\RoomIssue;
use Illuminate\Database\Eloquent\Model;

class HouseRoom extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'room_id',
        'house_id'
    ];

    // relations

}
