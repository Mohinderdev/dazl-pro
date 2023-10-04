<?php

namespace App\Modules\ProjectOpportunity\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectOpportunityCollection extends ResourceCollection
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
            'data' => ProjectOpportunityResource::collection($this->collection),
        ];
    }
}
