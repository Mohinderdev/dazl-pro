<?php

namespace App\Modules\FeatureIssue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;

use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\Project\Models\FeatureProjectFeatureIssue;
class DeleteFeatureIssueFeature extends Feature
{

    private $model;
    /**
     * DeleteFeatureIssueFeature constructor.
     */
    public function __construct(FeatureIssue $FeatureIssue)
    {
        $this->model = $FeatureIssue;
        $this->id = $FeatureIssue->id;
    }

    /**
     *
     * @param Request $request
     * @return
     * RespondWithRoute;
     */
    public function handle()
    {
        FeatureProjectFeatureIssue::where('feature_issue_id', $this->id )->delete();
        $this->model->delete();

        return $this->run(
            RespondWithRoute::class, [
            'route' => 'feature-issues.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
