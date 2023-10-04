<?php

namespace App\Modules\ProjectOpportunity\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use App\Modules\ProjectOpportunity\Requests\Admin\UpdateProjectOpportunityRequest;

class UpdateProjectOpportunityFeature extends Feature
{

    private $model;
    /**
     * EditProjectOpportunityFeature constructor.
     */
    public function __construct(ProjectOpportunity $ProjectOpportunity)
    {
        $this->model = $ProjectOpportunity;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateProjectOpportunityRequest $request)
    {
        $this->model->update($request->except('isInterested') +
            ['isInterested' => ($request->has('isInterested')?1:0)]
        );

        return $this->run(RespondWithRoute::class, [
            'route' => 'project-opportunities.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
