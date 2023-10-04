<?php

namespace App\Modules\ServiceType\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ServiceTypeCollection extends ResourceCollection
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
            'data' => ServiceTypeResource::collection($this->collection),
        ];
    }
}
