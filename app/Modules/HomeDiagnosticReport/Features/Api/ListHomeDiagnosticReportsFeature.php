<?php

namespace App\Modules\HomeDiagnosticReport\Features\Api;

use App\Core\Feature;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\HomeDiagnosticReport\Transformers\Api\HomeDiagnosticReportCollection;
use Illuminate\Http\Request;

class ListHomeDiagnosticReportsFeature extends Feature
{

    private $model;

    /**
     * ListHomeDiagnosticReportsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new HomeDiagnosticReport();
    }

    /**
     *
     * @param Request $request
     * @return HomeDiagnosticReportyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new HomeDiagnosticReportCollection($rows);
    }

}
