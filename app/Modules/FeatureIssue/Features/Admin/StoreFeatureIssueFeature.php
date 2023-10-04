<?php

namespace App\Modules\FeatureIssue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureIssue\Requests\Admin\CreateFeatureIssueRequest;

class StoreFeatureIssueFeature extends Feature
{

    private $model;
    /**
     * StoreFeatureIssueFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureIssue;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateFeatureIssueRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'feature-issues.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
