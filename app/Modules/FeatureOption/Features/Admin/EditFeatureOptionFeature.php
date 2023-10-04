<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\FeatureOption\Models\FeatureOption;

class EditFeatureOptionFeature extends Feature
{

    private $model;
    /**
     * EditFeatureOptionFeature constructor.
     */
    public function __construct(FeatureOption $FeatureOption)
    {
        $this->model = $FeatureOption;
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
            'view' => 'feature-options::edit',
            'data' => ['row' => $this->model , 'features' => $features ,'serviceTypes' => $serviceTypes]
        ]);
    }
    private function getAllFeatures(){
        return \App\Modules\Feature\Models\Feature::all();
    }
}
