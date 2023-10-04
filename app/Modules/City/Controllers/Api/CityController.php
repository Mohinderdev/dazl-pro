<?php
namespace App\Modules\City\Controllers\Api;

use App\Modules\City\Models\City;
use App\Http\Controllers\Controller;
use App\Modules\City\Features\Api\ListCitiesFeature;

class CityController extends Controller
{
    private $model;

    public function __construct(City $city)
    {
        $this->model = $city;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCitiesFeature::class);
    }
}
