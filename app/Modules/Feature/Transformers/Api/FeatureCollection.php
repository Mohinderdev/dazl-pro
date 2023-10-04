<?php

namespace App\Modules\Feature\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatureCollection extends ResourceCollection
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
            'data' => FeatureResource::collection($this->collection),
        ];
    }
}
