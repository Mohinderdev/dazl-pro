<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature;
use App\Modules\Room\Models\Room;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateFeatureFeature extends Feature
{

    /**
     * CreateFeatureFeature constructor.
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
            'view' => 'features::create',
            'data' => [
                'rooms' => $rooms
            ]
        ]);
    }

    private function getAllRooms(){
        return Room::all();
    }

}
