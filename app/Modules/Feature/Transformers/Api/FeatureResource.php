<?php

namespace App\Modules\Feature\Transformers\Api;

use App\Modules\FeatureIssue\Transformers\Api\FeatureIssueResource;
use App\Modules\FeatureOption\Transformers\Api\FeatureOptionResource;
use Illuminate\Http\Resources\Json\Resource;

class FeatureResource extends Resource
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
            'id'       => $this->id,
            'name'     => $this->name,
            'featureIssues' => FeatureIssueResource::collection($this->featureIssues),
            'featureOptions' => FeatureOptionResource::collection($this->featureOptions)
        ];
    }

}

