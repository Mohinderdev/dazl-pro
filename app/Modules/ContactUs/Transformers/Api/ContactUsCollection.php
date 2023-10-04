<?php

namespace App\Modules\ContactUs\Transformers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ContactUsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => ContactUsResource::collection($this->collection),
        ];
    }
}
