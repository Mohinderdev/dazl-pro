<?php

namespace App\Modules\FeatureIssue\Transformers\Api;

use App\Modules\ServiceType\Transformers\Api\ServiceTypeResource;
use Illuminate\Http\Resources\Json\Resource;

class FeatureIssueResource extends Resource
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
        ];
    }

}

