<?php

namespace App\Modules\Room\Features\Admin;

use App\Core\Feature;
use App\RoomToAdditional;
use App\RoomToType;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\Room_To_Feature;
use Twilio\Rest\Video\V1\RoomOptions;

class DeleteRoomFeature extends Feature
{

    private $model;
    /**
     * DeleteRoomFeature constructor.
     */
    public function __construct(Room $Room)
    {
        $this->model = $Room;
        $this->id = $Room->id;

    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        Room_To_Feature::where('room_id',$this->id)->delete();
        RoomToAdditional::where('room_id',$this->id)->delete();
        RoomToType::where('room_id',$this->id)->delete();
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'rooms.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
