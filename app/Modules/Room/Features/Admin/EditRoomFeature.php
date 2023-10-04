<?php

namespace App\Modules\Room\Features\Admin;

use App\Core\Feature;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Room\Models\Room;
use App\Modules\Room\Models\Room_To_Feature;

class EditRoomFeature extends Feature
{

    private $model;
    /**
     * EditRoomFeature constructor.
     */
    public function __construct(Room $Room)
    {
        $this->model = $Room;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {


        $features = \App\Modules\Feature\Models\Feature::all();
        $additional= AdditionalValue::all();

        return $this->run(RespondWithView::class, [
            'view' => 'rooms::edit',
            'data' => [
                'features'=>$features,
                'additional' => $additional,
                'types' => $features,
                'row' => $this->model,


            ]
        ]);
    }
}
