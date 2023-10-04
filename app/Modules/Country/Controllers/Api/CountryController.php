<?php
namespace App\Modules\Country\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Country\Models\Country;
use App\Modules\Country\Features\Api\ListCountriesFeature;

class CountryController extends Controller
{
    private $model;

    public function __construct(Country $country)
    {
        $this->model = $country;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCountriesFeature::class);
    }

}
