<?php

namespace App\Modules\ProjectOpportunity\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;

class DeleteProjectOpportunityFeature extends Feature
{

    private $model;
    /**
     * DeleteProjectOpportunityFeature constructor.
     */
    public function __construct(ProjectOpportunity $ProjectOpportunity)
    {
        $this->model = $ProjectOpportunity;
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
            'route' => 'project-opportunities.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
