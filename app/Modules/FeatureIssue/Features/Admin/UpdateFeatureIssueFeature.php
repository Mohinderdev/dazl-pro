<?php

namespace App\Modules\FeatureIssue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureIssue\Requests\Admin\UpdateFeatureIssueRequest;

class UpdateFeatureIssueFeature extends Feature
{

    private $model;
    /**
     * EditFeatureIssueFeature constructor.
     */
    public function __construct(FeatureIssue $FeatureIssue)
    {
        $this->model = $FeatureIssue;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateFeatureIssueRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'feature-issues.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
