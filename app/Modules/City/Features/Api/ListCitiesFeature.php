<?php

namespace App\Modules\City\Features\Api;

use App\Core\Feature;
use App\Modules\City\Models\City;
use App\Modules\City\Transformers\Api\CityCollection;
use Illuminate\Http\Request;

class ListCitiesFeature extends Feature
{
    private $model;

    /**
     * ListUnitsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new City();
    }

    /**
     *
     * @param Request $request
     * @return CityCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()
                            ->where('country_id', $request->country_id)
                            ->get();
        return new CityCollection($rows);
    }
}
