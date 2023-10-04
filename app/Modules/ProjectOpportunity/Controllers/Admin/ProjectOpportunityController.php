<?php

namespace App\Modules\ProjectOpportunity\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use App\Modules\ProjectOpportunity\Features\Admin\EditProjectOpportunityFeature;
use App\Modules\ProjectOpportunity\Features\Admin\StoreProjectOpportunityFeature;
use App\Modules\ProjectOpportunity\Features\Admin\CreateProjectOpportunityFeature;
use App\Modules\ProjectOpportunity\Features\Admin\DeleteProjectOpportunityFeature;
use App\Modules\ProjectOpportunity\Features\Admin\JsonProjectOpportunitiesFeature;
use App\Modules\ProjectOpportunity\Features\Admin\ListProjectOpportunitiesFeature;
use App\Modules\ProjectOpportunity\Features\Admin\UpdateProjectOpportunityFeature;

class ProjectOpportunityController extends Controller
{
    private $model;

    public function __construct(ProjectOpportunity $ProjectOpportunity)
    {
        $this->model = $ProjectOpportunity;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListProjectOpportunitiesFeature::class);
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
        return $this->serve(JsonProjectOpportunitiesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateProjectOpportunityFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreProjectOpportunityFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $ProjectOpportunity
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(ProjectOpportunity $ProjectOpportunity)
    {
        return $this->serve(EditProjectOpportunityFeature::class, [
            'ProjectOpportunity' => $ProjectOpportunity,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProjectOpportunity $ProjectOpportunity
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(ProjectOpportunity $ProjectOpportunity)
    {
        return $this->serve(UpdateProjectOpportunityFeature::class, [
            'ProjectOpportunity' => $ProjectOpportunity,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param ProjectOpportunity $ProjectOpportunity
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(ProjectOpportunity $ProjectOpportunity)
    {
        return $this->serve(DeleteProjectOpportunityFeature::class, [
            'ProjectOpportunity' => $ProjectOpportunity,
        ]);
    }
}
