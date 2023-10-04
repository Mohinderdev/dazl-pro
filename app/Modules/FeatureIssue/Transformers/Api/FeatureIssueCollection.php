<?php

namespace App\Modules\FeatureIssue\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FeatureIssueCollection extends ResourceCollection
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
            'data' => FeatureIssueResource::collection($this->collection),
        ];
    }
}
