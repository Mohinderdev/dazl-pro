<?php

namespace App\Modules\FeatureOption\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Feature\Models\Feature;
use App\Modules\FeatureOption\Models\FeatureOption;

class FeatureOptionApiRepo extends BaseRepository
{
    public function __construct(FeatureOption $featureOption)
    {
        parent::__construct($featureOption);
    }

    public function getFeaturesOptionsAssociatedWithFeatures(int $featureID): \Illuminate\Support\Collection
    {
        return $this->findBy(['feature_id' => $featureID]);
    }

}
