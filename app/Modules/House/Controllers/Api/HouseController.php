<?php
namespace App\Modules\House\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\House\Models\House;
use App\Modules\House\Features\Api\ListHousesFeature;

class HouseController extends Controller
{
    private $model;

    public function __construct(House $unitView)
    {
        $this->model = $unitView;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListHousesFeature::class);
    }

}
