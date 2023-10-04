<?php


namespace App\Modules\FeatureOption\Services;

use App\Modules\FeatureOption\Repositories\FeatureOptionApiRepo;


class FeatureOptionService
{
    protected FeatureOptionApiRepo $featureOptionApiRepo;
    public function __construct(FeatureOptionApiRepo $featureOptionApiRepo){
        $this->featureOptionApiRepo = $featureOptionApiRepo;
    }


    public function getFeaturesOptionsAssociatedWithFeatures(int $featureID): \Illuminate\Support\Collection
    {
        return $this->featureOptionApiRepo->getFeaturesOptionsAssociatedWithFeatures($featureID);
    }
}
