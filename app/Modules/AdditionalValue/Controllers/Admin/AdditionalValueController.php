<?php

namespace App\Modules\AdditionalValue\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use App\Modules\AdditionalValue\Features\Admin\EditAdditionalValueFeature;
use App\Modules\AdditionalValue\Features\Admin\StoreAdditionalValueFeature;
use App\Modules\AdditionalValue\Features\Admin\CreateAdditionalValueFeature;
use App\Modules\AdditionalValue\Features\Admin\DeleteAdditionalValueFeature;
use App\Modules\AdditionalValue\Features\Admin\JsonAdditionalValuesFeature;
use App\Modules\AdditionalValue\Features\Admin\ListAdditionalValuesFeature;
use App\Modules\AdditionalValue\Features\Admin\UpdateAdditionalValueFeature;

class AdditionalValueController extends Controller
{
    private $model;

    public function __construct(AdditionalValue $AdditionalValue)
    {
        $this->model = $AdditionalValue;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListAdditionalValuesFeature::class);
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
        return $this->serve(JsonAdditionalValuesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateAdditionalValueFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreAdditionalValueFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $AdditionalValue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(AdditionalValue $AdditionalValue)
    {
        return $this->serve(EditAdditionalValueFeature::class, [
            'AdditionalValue' => $AdditionalValue,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AdditionalValue $AdditionalValue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(AdditionalValue $AdditionalValue)
    {
        return $this->serve(UpdateAdditionalValueFeature::class, [
            'AdditionalValue' => $AdditionalValue,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param AdditionalValue $AdditionalValue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(AdditionalValue $AdditionalValue)
    {
        return $this->serve(DeleteAdditionalValueFeature::class, [
            'AdditionalValue' => $AdditionalValue,
        ]);
    }
}
