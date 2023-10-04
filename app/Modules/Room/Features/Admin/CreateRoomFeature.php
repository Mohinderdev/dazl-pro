<?php

namespace App\Modules\Room\Features\Admin;

use App\Core\Feature;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateRoomFeature extends Feature
{

    /**
     * CreateRoomFeature constructor.
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
        $features = \App\Modules\Feature\Models\Feature::all();
        $additional= AdditionalValue::all();

        return $this->run(RespondWithView::class, [
            'view' => 'rooms::create',
            'data' => [
                'features' => $features,
                'additional' => $additional,
                'types' => $features
            ]
        ]);
    }

}
