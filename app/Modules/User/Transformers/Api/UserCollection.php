<?php

namespace App\Modules\User\Transformers\Api;

use App\Modules\User\Transformers\Api\UserResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
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
            'data' => UserResource::collection($this->collection),
        ];
    }
}
