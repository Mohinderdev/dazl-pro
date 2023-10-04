<?php

namespace App\Modules\FeatureOption\Controllers\Admin;

use App\Core\Response\Admin\RespondWithRoute;
use App\Http\Controllers\Controller;
use App\Modules\FeatureOption\Models\FeatureOption;
use App\Modules\FeatureOption\Features\Admin\EditFeatureOptionFeature;
use App\Modules\FeatureOption\Features\Admin\StoreFeatureOptionFeature;
use App\Modules\FeatureOption\Features\Admin\CreateFeatureOptionFeature;
use App\Modules\FeatureOption\Features\Admin\DeleteFeatureOptionFeature;
use App\Modules\FeatureOption\Features\Admin\JsonFeatureOptionsFeature;
use App\Modules\FeatureOption\Features\Admin\ListFeatureOptionsFeature;
use App\Modules\FeatureOption\Features\Admin\UpdateFeatureOptionFeature;
use App\Modules\Project\Models\FeatureProjectFeatureIssue;
use App\Modules\FeatureIssue\Models\FeatureIssue;
class FeatureOptionController extends Controller
{
    private $model;

    public function __construct(FeatureOption $FeatureOption)
    {
        $this->model = $FeatureOption;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListFeatureOptionsFeature::class);
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
        return $this->serve(JsonFeatureOptionsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateFeatureOptionFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreFeatureOptionFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $FeatureOption
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(FeatureOption $FeatureOption)
    {
        return $this->serve(EditFeatureOptionFeature::class, [
            'FeatureOption' => $FeatureOption,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FeatureOption $FeatureOption
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(FeatureOption $FeatureOption)
    {
        return $this->serve(UpdateFeatureOptionFeature::class, [
            'FeatureOption' => $FeatureOption,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param FeatureOption $FeatureOption
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */

    public function destroy(FeatureOption $FeatureOption)
    {
        return $this->serve(DeleteFeatureOptionFeature::class, [
            'FeatureOption' => $FeatureOption,
        ]);
    }
    public function deleteIssue($id){
        FeatureProjectFeatureIssue::where('feature_issue_id', $id )->delete();
        FeatureIssue::find($id)->delete();

        return redirect()->back()->with('message','Delete Successfully');
    }
}
