<?php

namespace App\Modules\ProjectOpportunity\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use App\Modules\ProjectOpportunity\Requests\Admin\CreateProjectOpportunityRequest;

class StoreProjectOpportunityFeature extends Feature
{

    private $model;
    /**
     * StoreProjectOpportunityFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectOpportunity;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateProjectOpportunityRequest $request)
    {
        $this->model->create(
            $request->except('isInterested') +
            ['isInterested' => ($request->has('isInterested')?1:0)]
        );

        return $this->run(RespondWithRoute::class, [
            'route' => 'project-opportunities.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
