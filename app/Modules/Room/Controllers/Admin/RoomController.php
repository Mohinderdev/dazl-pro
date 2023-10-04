<?php

namespace App\Modules\Room\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Features\Admin\EditRoomFeature;
use App\Modules\Room\Features\Admin\StoreRoomFeature;
use App\Modules\Room\Features\Admin\CreateRoomFeature;
use App\Modules\Room\Features\Admin\DeleteRoomFeature;
use App\Modules\Room\Features\Admin\JsonRoomsFeature;
use App\Modules\Room\Features\Admin\ListRoomsFeature;
use App\Modules\Room\Features\Admin\UpdateRoomFeature;

class RoomController extends Controller
{
    private $model;

    public function __construct(Room $Room)
    {
        $this->model = $Room;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListRoomsFeature::class);
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
        return $this->serve(JsonRoomsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateRoomFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {

        return $this->serve(StoreRoomFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Room
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Room $Room)
    {
        return $this->serve(EditRoomFeature::class, [
            'Room' => $Room,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Room $Room
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Room $Room)
    {

        return $this->serve(UpdateRoomFeature::class, [
            'Room' => $Room,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Room $Room
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Room $Room)
    {
        return $this->serve(DeleteRoomFeature::class, [
            'Room' => $Room,
        ]);
    }
}
