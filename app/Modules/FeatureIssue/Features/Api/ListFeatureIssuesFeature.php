<?php

namespace App\Modules\FeatureIssue\Features\Api;

use App\Core\Feature;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureIssue\Transformers\Api\FeatureIssueCollection;
use Illuminate\Http\Request;

class ListFeatureIssuesFeature extends Feature
{

    private $model;

    /**
     * ListFeatureIssuesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureIssue();
    }

    /**
     *
     * @param Request $request
     * @return FeatureIssueyCollection
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->paginate(10);
        return new FeatureIssueCollection($rows);
    }

}
