<?php

namespace App\Modules\House\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\House\Models\House;
use App\Modules\House\Features\Admin\EditHouseFeature;
use App\Modules\House\Features\Admin\StoreHouseFeature;
use App\Modules\House\Features\Admin\CreateHouseFeature;
use App\Modules\House\Features\Admin\DeleteHouseFeature;
use App\Modules\House\Features\Admin\JsonHousesFeature;
use App\Modules\House\Features\Admin\ListHousesFeature;
use App\Modules\House\Features\Admin\UpdateHouseFeature;

class HouseController extends Controller
{
    private $model;

    public function __construct(House $House)
    {
        $this->model = $House;
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

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws \Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonHousesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateHouseFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreHouseFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $House
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(House $House)
    {
        return $this->serve(EditHouseFeature::class, [
            'House' => $House,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param House $House
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(House $House)
    {
        return $this->serve(UpdateHouseFeature::class, [
            'House' => $House,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param House $House
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(House $House)
    {
        return $this->serve(DeleteHouseFeature::class, [
            'House' => $House,
        ]);
    }
}
