<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature as CoreFeature;
use App\Modules\Room\Models\Room;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Feature\Models\Feature;

class EditFeatureFeature extends CoreFeature
{

    private $model;
    /**
     * EditFeatureFeature constructor.
     */
    public function __construct(Feature $Feature)
    {
        $this->model = $Feature;
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
            'view' => 'features::edit',
            'data' => ['row' => $this->model ,'rooms' => $rooms]
        ]);
    }

    private function getAllRooms(){
        return Room::all();
    }
}
