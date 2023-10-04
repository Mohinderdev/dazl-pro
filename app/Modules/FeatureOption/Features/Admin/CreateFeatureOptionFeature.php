<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;

class CreateFeatureOptionFeature extends Feature
{

    /**
     * CreateFeatureOptionFeature constructor.
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
        $features = $this->getAllFeatures();
        $serviceTypes = ServiceType::all();
        return $this->run(RespondWithView::class, [
            'view' => 'feature-options::create',
            'data' => [
                'features' => $features,
                    'serviceTypes' => $serviceTypes
            ]
        ]);
    }

    private function getAllFeatures(){
        return \App\Modules\Feature\Models\Feature::all();
    }

}
