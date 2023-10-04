<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\City\Models\City;
use App\Modules\Country\Models\Country;

class EditCityFeature extends Feature
{
    private $model;
    /**
     * EditCityFeature constructor.
     */
    public function __construct(City $city)
    {
        $this->model = $city;
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
            'view' => 'city::edit',
            'data' => [
                'row' => $this->model,
                'countries' => $countries
            ]
        ]);
    }
}
