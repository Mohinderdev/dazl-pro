<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\City\Models\City;
use App\Modules\City\Requests\Admin\CreateCityRequest;

class StoreCityFeature extends Feature
{

    private $model;
    /**
     * StoreCityFeature constructor.
     */
    public function __construct()
    {
        $this->model = new City;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateCityRequest $request)
    {
        $this->model->create([
            'name' => json_encode($request->name),
            'country_id' => $request->country_id,
        ]);

        return $this->run(RespondWithRoute::class, [
            'route' => 'cities.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
