<?php

namespace App\Modules\BaseModule\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\BaseModule\Models\BaseModule;
use App\Modules\BaseModule\Features\Admin\EditBaseModuleFeature;
use App\Modules\BaseModule\Features\Admin\StoreBaseModuleFeature;
use App\Modules\BaseModule\Features\Admin\CreateBaseModuleFeature;
use App\Modules\BaseModule\Features\Admin\DeleteBaseModuleFeature;
use App\Modules\BaseModule\Features\Admin\JsonBaseModulesFeature;
use App\Modules\BaseModule\Features\Admin\ListBaseModulesFeature;
use App\Modules\BaseModule\Features\Admin\UpdateBaseModuleFeature;

class BaseModuleController extends Controller
{
    private $model;

    public function __construct(BaseModule $BaseModule)
    {
        $this->model = $BaseModule;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListBaseModulesFeature::class);
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
        return $this->serve(JsonBaseModulesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateBaseModuleFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreBaseModuleFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $BaseModule
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(BaseModule $BaseModule)
    {
        return $this->serve(EditBaseModuleFeature::class, [
            'BaseModule' => $BaseModule,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BaseModule $BaseModule
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(BaseModule $BaseModule)
    {
        return $this->serve(UpdateBaseModuleFeature::class, [
            'BaseModule' => $BaseModule,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param BaseModule $BaseModule
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(BaseModule $BaseModule)
    {
        return $this->serve(DeleteBaseModuleFeature::class, [
            'BaseModule' => $BaseModule,
        ]);
    }
}
