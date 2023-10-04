<?php

namespace App\Modules\HomeDiagnosticReport\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\HomeDiagnosticReport\Features\Admin\EditHomeDiagnosticReportFeature;
use App\Modules\HomeDiagnosticReport\Features\Admin\StoreHomeDiagnosticReportFeature;
use App\Modules\HomeDiagnosticReport\Features\Admin\CreateHomeDiagnosticReportFeature;
use App\Modules\HomeDiagnosticReport\Features\Admin\DeleteHomeDiagnosticReportFeature;
use App\Modules\HomeDiagnosticReport\Features\Admin\JsonHomeDiagnosticReportsFeature;
use App\Modules\HomeDiagnosticReport\Features\Admin\ListHomeDiagnosticReportsFeature;
use App\Modules\HomeDiagnosticReport\Features\Admin\UpdateHomeDiagnosticReportFeature;

class HomeDiagnosticReportController extends Controller
{
    private $model;

    public function __construct(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        $this->model = $HomeDiagnosticReport;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListHomeDiagnosticReportsFeature::class);
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
        return $this->serve(JsonHomeDiagnosticReportsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateHomeDiagnosticReportFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreHomeDiagnosticReportFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $HomeDiagnosticReport
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        return $this->serve(EditHomeDiagnosticReportFeature::class, [
            'HomeDiagnosticReport' => $HomeDiagnosticReport,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param HomeDiagnosticReport $HomeDiagnosticReport
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        return $this->serve(UpdateHomeDiagnosticReportFeature::class, [
            'HomeDiagnosticReport' => $HomeDiagnosticReport,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param HomeDiagnosticReport $HomeDiagnosticReport
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        return $this->serve(DeleteHomeDiagnosticReportFeature::class, [
            'HomeDiagnosticReport' => $HomeDiagnosticReport,
        ]);
    }
}
