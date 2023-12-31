<?php

namespace App\Modules\BaseModule\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BaseModuleCollection extends ResourceCollection
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
            'data' => BaseModuleResource::collection($this->collection),
        ];
    }
}
