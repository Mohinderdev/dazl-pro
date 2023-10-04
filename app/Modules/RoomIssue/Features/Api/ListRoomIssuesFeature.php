<?php

namespace App\Modules\RoomIssue\Features\Api;

use App\Core\Feature;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\RoomIssue\Transformers\Api\RoomIssueCollection;
use Illuminate\Http\Request;

class ListRoomIssuesFeature extends Feature
{

    private $model;

    /**
     * ListRoomIssuesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new RoomIssue();
    }

    /**
     *
     * @param Request $request
     * @return RoomIssueyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new RoomIssueCollection($rows);
    }

}
