<?php

namespace App\Modules\Realtor\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RealtorCollection extends ResourceCollection
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
            'data' => RealtorResource::collection($this->collection),
        ];
    }
}
