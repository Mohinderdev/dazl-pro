<?php

namespace App\Modules\Room\Features\Api;

use App\Core\Feature;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Transformers\Api\RoomCollection;
use Illuminate\Http\Request;

class ListRoomsFeature extends Feature
{

    private $model;

    /**
     * ListRoomsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Room();
    }

    /**
     *
     * @param Request $request
     * @return RoomyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
    }

}
