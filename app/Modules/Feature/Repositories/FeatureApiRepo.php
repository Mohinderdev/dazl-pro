<?php

namespace App\Modules\Feature\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Feature\Models\Feature;

class FeatureApiRepo extends BaseRepository
{
    private Feature $feature ;
    public function __construct(Feature $feature)
    {
        $this->feature = $feature;
        parent::__construct($feature);
    }

    public function getFeaturesAssociatedWithRoom(int $roomId): \Illuminate\Support\Collection
    {
        return $this->findBy(['room_id' => $roomId]);
    }

}
