<?php

namespace App\Modules\FeatureIssue\Features\Admin;

use App\Core\Feature;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateFeatureIssueFeature extends Feature
{

    /**
     * CreateFeatureIssueFeature constructor.
     */
    public function __construct()
    {
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
            'view' => 'feature-issues::create',
            'data' => [
                'features' => $features,
                'serviceTypes' => $serviceTypes
            ]
        ]);
    }

}
