<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\City\Models\City;
use App\Modules\City\Requests\Admin\UpdateCityRequest;

class UpdateCityFeature extends Feature
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
     * @param UpdateCityRequest $request
     * @return App\Core\Response\Admin\RespondWithRoute;
     */
    public function handle(UpdateCityRequest $request)
    {
        $this->model->update([
            'name' => json_encode($request->name),
            'country_id' => $request->country_id,
        ]);

        return $this->run(RespondWithRoute::class, [
            'route' => 'cities.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
