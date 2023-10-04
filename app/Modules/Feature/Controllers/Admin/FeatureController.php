<?php

namespace App\Modules\Feature\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Feature\Models\Feature;
use App\Modules\Feature\Features\Admin\EditFeatureFeature;
use App\Modules\Feature\Features\Admin\StoreFeatureFeature;
use App\Modules\Feature\Features\Admin\CreateFeatureFeature;
use App\Modules\Feature\Features\Admin\DeleteFeatureFeature;
use App\Modules\Feature\Features\Admin\JsonFeaturesFeature;
use App\Modules\Feature\Features\Admin\ListFeaturesFeature;
use App\Modules\Feature\Features\Admin\UpdateFeatureFeature;

class FeatureController extends Controller
{
    private $model;

    public function __construct(Feature $Feature)
    {
        $this->model = $Feature;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListFeaturesFeature::class);
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
        return $this->serve(JsonFeaturesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateFeatureFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreFeatureFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Feature
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Feature $Feature)
    {
        return $this->serve(EditFeatureFeature::class, [
            'Feature' => $Feature,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Feature $Feature
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Feature $Feature)
    {
        return $this->serve(UpdateFeatureFeature::class, [
            'Feature' => $Feature,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Feature $Feature
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Feature $Feature)
    {
        return $this->serve(DeleteFeatureFeature::class, [
            'Feature' => $Feature,
        ]);
    }
}
