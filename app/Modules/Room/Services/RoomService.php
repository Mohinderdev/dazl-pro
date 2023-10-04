<?php


namespace App\Modules\Room\Services;

use App\Modules\Room\Repositories\RoomApiRepo;


class RoomService
{
    protected RoomApiRepo $roomApiRepo;
    public function __construct(RoomApiRepo $roomApiRepo){
        $this->roomApiRepo = $roomApiRepo;
    }

    public function getAllRooms(){
        return $this->roomApiRepo->getAllRoomsWithFeaturesAndFeatureIssues();
    }
}
