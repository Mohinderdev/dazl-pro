<?php

namespace App\Modules\FeatureOption\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatureOptionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => FeatureOptionResource::collection($this->collection),
        ];
    }
}
