<?php

namespace App\Modules\ServiceType\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\ServiceType\Models\ServiceType;
use App\Modules\ServiceType\Features\Admin\EditServiceTypeFeature;
use App\Modules\ServiceType\Features\Admin\StoreServiceTypeFeature;
use App\Modules\ServiceType\Features\Admin\CreateServiceTypeFeature;
use App\Modules\ServiceType\Features\Admin\DeleteServiceTypeFeature;
use App\Modules\ServiceType\Features\Admin\JsonServiceTypesFeature;
use App\Modules\ServiceType\Features\Admin\ListServiceTypesFeature;
use App\Modules\ServiceType\Features\Admin\UpdateServiceTypeFeature;

class ServiceTypeController extends Controller
{
    private $model;

    public function __construct(ServiceType $ServiceType)
    {
        $this->model = $ServiceType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListServiceTypesFeature::class);
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
        return $this->serve(JsonServiceTypesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateServiceTypeFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreServiceTypeFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $ServiceType
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(ServiceType $ServiceType)
    {
        return $this->serve(EditServiceTypeFeature::class, [
            'ServiceType' => $ServiceType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceType $ServiceType
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(ServiceType $ServiceType)
    {
        return $this->serve(UpdateServiceTypeFeature::class, [
            'ServiceType' => $ServiceType,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param ServiceType $ServiceType
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(ServiceType $ServiceType)
    {
        return $this->serve(DeleteServiceTypeFeature::class, [
            'ServiceType' => $ServiceType,
        ]);
    }
}
