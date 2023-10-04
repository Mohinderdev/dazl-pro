<?php

namespace App\Modules\ProjectType\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\ProjectType\Features\Admin\EditProjectTypeFeature;
use App\Modules\ProjectType\Features\Admin\StoreProjectTypeFeature;
use App\Modules\ProjectType\Features\Admin\CreateProjectTypeFeature;
use App\Modules\ProjectType\Features\Admin\DeleteProjectTypeFeature;
use App\Modules\ProjectType\Features\Admin\JsonProjectTypesFeature;
use App\Modules\ProjectType\Features\Admin\ListProjectTypesFeature;
use App\Modules\ProjectType\Features\Admin\UpdateProjectTypeFeature;

class ProjectTypeController extends Controller
{
    private $model;

    public function __construct(ProjectType $ProjectType)
    {
        $this->model = $ProjectType;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListProjectTypesFeature::class);
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
        return $this->serve(JsonProjectTypesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateProjectTypeFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreProjectTypeFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $ProjectType
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(ProjectType $ProjectType)
    {
        return $this->serve(EditProjectTypeFeature::class, [
            'ProjectType' => $ProjectType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectType $ProjectType
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(ProjectType $ProjectType)
    {
        return $this->serve(UpdateProjectTypeFeature::class, [
            'ProjectType' => $ProjectType,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param ProjectType $ProjectType
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(ProjectType $ProjectType)
    {
        return $this->serve(DeleteProjectTypeFeature::class, [
            'ProjectType' => $ProjectType,
        ]);
    }
}
