<?php

namespace App\Modules\RoomIssue\Models;

use App\Modules\Room\Models\Room;
use Illuminate\Database\Eloquent\Model;

class RoomIssue extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'room_id'
    ];

    // relations

    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function images(){
        return $this->hasMany(RoomIssueImage::class);
    }

}
