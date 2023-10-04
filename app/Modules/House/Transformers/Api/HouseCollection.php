<?php

namespace App\Modules\House\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HouseCollection extends ResourceCollection
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
            'data' => HouseResource::collection($this->collection),
        ];
    }
}
