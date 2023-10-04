<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\City\Models\City;

class DeleteCityFeature extends Feature
{

    private $model;
    /**
     * DeleteCityFeature constructor.
     */
    public function __construct(City $city)
    {
        $this->model = $city;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'cities.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
