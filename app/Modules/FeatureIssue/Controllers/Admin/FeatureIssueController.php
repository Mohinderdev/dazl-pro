<?php

namespace App\Modules\FeatureIssue\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FeatureIssue\Features\Admin\EditFeatureIssueFeature;
use App\Modules\FeatureIssue\Features\Admin\StoreFeatureIssueFeature;
use App\Modules\FeatureIssue\Features\Admin\CreateFeatureIssueFeature;
use App\Modules\FeatureIssue\Features\Admin\DeleteFeatureIssueFeature;
use App\Modules\FeatureIssue\Features\Admin\JsonFeatureIssuesFeature;
use App\Modules\FeatureIssue\Features\Admin\ListFeatureIssuesFeature;
use App\Modules\FeatureIssue\Features\Admin\UpdateFeatureIssueFeature;

class FeatureIssueController extends Controller
{
    private $model;

    public function __construct(FeatureIssue $FeatureIssue)
    {
        $this->model = $FeatureIssue;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListFeatureIssuesFeature::class);
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
        return $this->serve(JsonFeatureIssuesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateFeatureIssueFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreFeatureIssueFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $FeatureIssue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(FeatureIssue $FeatureIssue)
    {
        return $this->serve(EditFeatureIssueFeature::class, [
            'FeatureIssue' => $FeatureIssue,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FeatureIssue $FeatureIssue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(FeatureIssue $FeatureIssue)
    {
        return $this->serve(UpdateFeatureIssueFeature::class, [
            'FeatureIssue' => $FeatureIssue,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param FeatureIssue $FeatureIssue
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(FeatureIssue $FeatureIssue)
    {
        return $this->serve(DeleteFeatureIssueFeature::class, [
            'FeatureIssue' => $FeatureIssue,
        ]);
    }

    public function get_feature_options($id)
    {

        $feature_option = FeatureOption::where('feature_id',$id)->get();
        return response()->json([
            'data' => $feature_option,
        ]);
    }
}
