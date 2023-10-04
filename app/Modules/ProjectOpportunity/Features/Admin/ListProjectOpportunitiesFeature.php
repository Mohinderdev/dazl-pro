<?php

namespace App\Modules\ProjectOpportunity\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;

class ListProjectOpportunitiesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectOpportunity();
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
            'view' => 'project-opportunities::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
