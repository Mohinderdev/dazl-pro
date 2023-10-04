<?php

namespace App\Modules\City\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\City\Models\City;
use App\Modules\City\Features\Admin\EditCityFeature;
use App\Modules\City\Features\Admin\StoreCityFeature;
use App\Modules\City\Features\Admin\CreateCityFeature;
use App\Modules\City\Features\Admin\DeleteCityFeature;
use App\Modules\City\Features\Admin\JsonCitiesFeature;
use App\Modules\City\Features\Admin\ListCitiesFeature;
use App\Modules\City\Features\Admin\UpdateCityFeature;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use ReflectionException;

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
     * @return Response
     * @throws ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCitiesFeature::class);
    }

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonCitiesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateCityFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreCityFeature::class);
    }

    /**
     * Show update form.
     *
     * @param City $city
     * @return View
     *
     * @throws ReflectionException
     */
    public function edit(City $city)
    {
        return $this->serve(EditCityFeature::class, [
            'city' => $city,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param City $city
     * @return View
     *
     * @throws ReflectionException
     */
    public function update(City $city)
    {
        return $this->serve(UpdateCityFeature::class, [
            'city' => $city,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param City $city
     * @return View
     *
     * @throws ReflectionException
     */
    public function destroy(City $city)
    {
        return $this->serve(DeleteCityFeature::class, [
            'city' => $city,
        ]);
    }
}
