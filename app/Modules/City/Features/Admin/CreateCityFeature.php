<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\Country\Models\Country;
use App\Core\Response\Admin\RespondWithView;

class CreateCityFeature extends Feature
{

    /**
     * CreateCityFeature constructor.
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
        $countries = Country::get(['name', 'id']);

        return $this->run(RespondWithView::class, [
            'view' => 'city::create',
            'data' => [
                'countries' => $countries
            ]
        ]);
    }
}
