<?php

namespace App\Modules\Room\Transformers\Api;

use App\Modules\Feature\Transformers\Api\FeatureCollection;
use App\Modules\Feature\Transformers\Api\FeatureResource;
use Illuminate\Http\Resources\Json\Resource;

class RoomResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'features' => FeatureResource::collection($this->features),
        ];
    }

}

