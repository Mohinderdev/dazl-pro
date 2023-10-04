<?php

namespace App\Modules\Country\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Country\Models\Country;
use App\Modules\Country\Features\Admin\EditCountryFeature;
use App\Modules\Country\Features\Admin\StoreCountryFeature;
use App\Modules\Country\Features\Admin\CreateCountryFeature;
use App\Modules\Country\Features\Admin\DeleteCountryFeature;
use App\Modules\Country\Features\Admin\JsonCountriesFeature;
use App\Modules\Country\Features\Admin\ListCountriesFeature;
use App\Modules\Country\Features\Admin\UpdateCountryFeature;

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

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws \Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonCountriesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateCountryFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreCountryFeature::class);
    }

    /**
     * Show update form.
     *
     * @param Country $country
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Country $country)
    {
        return $this->serve(EditCountryFeature::class, [
            'country' => $country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Country $country
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Country $country)
    {
        return $this->serve(UpdateCountryFeature::class, [
            'country' => $country,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Country $country
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Country $country)
    {
        return $this->serve(DeleteCountryFeature::class, [
            'country' => $country,
        ]);
    }
}
