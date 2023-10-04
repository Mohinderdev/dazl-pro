<?php

namespace App\Modules\BlogCategory\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BlogCategoryCollection extends ResourceCollection
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
            'data' => BlogCategoryResource::collection($this->collection),
        ];
    }
}
