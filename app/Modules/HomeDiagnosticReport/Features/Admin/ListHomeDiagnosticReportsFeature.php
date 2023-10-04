<?php

namespace App\Modules\HomeDiagnosticReport\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;

class ListHomeDiagnosticReportsFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new HomeDiagnosticReport();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();
        return $this->run(RespondWithView::class, [
            'view' => 'home-diagnostic-reports::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
