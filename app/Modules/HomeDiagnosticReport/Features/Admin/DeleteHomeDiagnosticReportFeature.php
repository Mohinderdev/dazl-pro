<?php

namespace App\Modules\HomeDiagnosticReport\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;

class DeleteHomeDiagnosticReportFeature extends Feature
{

    private $model;
    /**
     * DeleteHomeDiagnosticReportFeature constructor.
     */
    public function __construct(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        $this->model = $HomeDiagnosticReport;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'home-diagnostic-reports.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
