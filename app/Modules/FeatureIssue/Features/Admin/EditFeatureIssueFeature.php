<?php

namespace App\Modules\FeatureIssue\Features\Admin;

use App\Core\Feature;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\FeatureIssue\Models\FeatureIssue;

class EditFeatureIssueFeature extends Feature
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
     * @return RespondWithView
     */
    public function handle()
    {
        $features = \App\Modules\Feature\Models\Feature::all();
        $serviceTypes = ServiceType::all();

        return $this->run(RespondWithView::class, [
            'view' => 'feature-issues::edit',
            'data' => ['row' => $this->model ,'features' => $features , 'serviceTypes' => $serviceTypes]
        ]);
    }
}
