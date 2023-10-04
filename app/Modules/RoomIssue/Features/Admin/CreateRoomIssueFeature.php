<?php

namespace App\Modules\RoomIssue\Features\Admin;

use App\Core\Feature;
use App\Modules\Room\Models\Room;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateRoomIssueFeature extends Feature
{

    /**
     * CreateRoomIssueFeature constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rooms = $this->getAllRooms();
        return $this->run(RespondWithView::class, [
            'view' => 'room-issues::create' ,
            'data' => [
                'rooms' => $rooms
            ]
        ]);
    }

    public function getAllRooms(){
        return Room::all();
    }

}
