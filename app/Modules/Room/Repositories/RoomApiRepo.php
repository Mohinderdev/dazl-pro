<?php

namespace App\Modules\Room\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Room\Models\Room;

class RoomApiRepo extends BaseRepository
{
    public Room $room;
    public function __construct(Room $room)
    {
        $this->room = $room;
        parent::__construct($room);
    }

    public function getAllRoomsWithFeaturesAndFeatureIssues(){

        return $this->room->with([
            'features',
            'features.featureIssues',
            'features.featureOptions',
            'features.featureIssues.serviceType'
        ])->get();
    }

}
