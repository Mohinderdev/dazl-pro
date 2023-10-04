<?php

namespace App\Modules\House\Features\Api;

use App\Core\Feature;
use App\Modules\House\Models\House;
use App\Modules\House\Transformers\Api\HouseCollection;
use Illuminate\Http\Request;

class ListHousesFeature extends Feature
{

    private $model;

    /**
     * ListHousesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new House();
    }

    /**
     *
     * @param Request $request
     * @return HouseyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new HouseCollection($rows);
    }

}
