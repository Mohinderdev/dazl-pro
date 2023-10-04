<?php

namespace App\Modules\RoomIssue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\RoomIssue\Models\RoomIssue;

class DeleteRoomIssueFeature extends Feature
{

    private $model;
    /**
     * DeleteRoomIssueFeature constructor.
     */
    public function __construct(RoomIssue $RoomIssue)
    {
        $this->model = $RoomIssue;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'room-issues.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
