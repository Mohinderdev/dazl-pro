<?php
namespace App\Modules\RoomIssue\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\RoomIssue\Features\Api\ListRoomIssuesFeature;

class RoomIssueController extends Controller
{
    private $model;

    public function __construct(RoomIssue $unitView)
    {
        $this->model = $unitView;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListRoomIssuesFeature::class);
    }

}
