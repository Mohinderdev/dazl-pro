<?php

namespace App\Modules\RoomIssue\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\RoomIssue\Features\Admin\EditRoomIssueFeature;
use App\Modules\RoomIssue\Features\Admin\StoreRoomIssueFeature;
use App\Modules\RoomIssue\Features\Admin\CreateRoomIssueFeature;
use App\Modules\RoomIssue\Features\Admin\DeleteRoomIssueFeature;
use App\Modules\RoomIssue\Features\Admin\JsonRoomIssuesFeature;
use App\Modules\RoomIssue\Features\Admin\ListRoomIssuesFeature;
use App\Modules\RoomIssue\Features\Admin\UpdateRoomIssueFeature;

class RoomIssueController extends Controller
{
    private $model;

    public function __construct(RoomIssue $RoomIssue)
    {
        $this->model = $RoomIssue;
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

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws \Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonRoomIssuesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateRoomIssueFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreRoomIssueFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $RoomIssue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(RoomIssue $RoomIssue)
    {
        return $this->serve(EditRoomIssueFeature::class, [
            'RoomIssue' => $RoomIssue,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoomIssue $RoomIssue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(RoomIssue $RoomIssue)
    {
        return $this->serve(UpdateRoomIssueFeature::class, [
            'RoomIssue' => $RoomIssue,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param RoomIssue $RoomIssue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(RoomIssue $RoomIssue)
    {
        return $this->serve(DeleteRoomIssueFeature::class, [
            'RoomIssue' => $RoomIssue,
        ]);
    }
}
