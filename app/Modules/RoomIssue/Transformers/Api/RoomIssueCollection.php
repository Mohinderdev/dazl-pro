<?php

namespace App\Modules\RoomIssue\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RoomIssueCollection extends ResourceCollection
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
            'data' => RoomIssueResource::collection($this->collection),
        ];
    }
}
