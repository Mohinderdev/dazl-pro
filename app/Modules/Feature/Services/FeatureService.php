<?php


namespace App\Modules\Feature\Services;

use App\Modules\Feature\Repositories\FeatureApiRepo;


class FeatureService
{
    protected FeatureApiRepo $featureApiRepo;
    public function __construct(FeatureApiRepo $featureApiRepo){
        $this->featureApiRepo = $featureApiRepo;
    }

    public function getAllFeatures(){
        return $this->featureApiRepo->all();
    }

    public function getFeatureAssociatedWithRoom(int $roomId): \Illuminate\Support\Collection
    {
        return $this->featureApiRepo->getFeaturesAssociatedWithRoom($roomId);
    }
}
