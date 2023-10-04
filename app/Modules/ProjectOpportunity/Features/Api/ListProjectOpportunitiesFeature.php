<?php

namespace App\Modules\ProjectOpportunity\Features\Api;

use App\Core\Feature;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use App\Modules\ProjectOpportunity\Transformers\Api\ProjectOpportunityCollection;
use Illuminate\Http\Request;

class ListProjectOpportunitiesFeature extends Feature
{

    private $model;

    /**
     * ListProjectOpportunitiesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectOpportunity();
    }

    /**
     *
     * @param Request $request
     * @return ProjectOpportunityyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new ProjectOpportunityCollection($rows);
    }

}
