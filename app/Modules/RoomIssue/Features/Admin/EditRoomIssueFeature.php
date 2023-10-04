<?php

namespace App\Modules\RoomIssue\Features\Admin;

use App\Core\Feature;
use App\Modules\Room\Models\Room;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\RoomIssue\Models\RoomIssue;

class EditRoomIssueFeature extends Feature
{

    private $model;
    /**
     * EditRoomIssueFeature constructor.
     */
    public function __construct(RoomIssue $RoomIssue)
    {
        $this->model = $RoomIssue;
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
            'view' => 'room-issues::edit',
            'data' => ['row' => $this->model , 'rooms' => $rooms]
        ]);
    }

    public function getAllRooms(){
        return Room::all();
    }
}
