<?php

namespace App\Modules\City\Transformers\Api;

use App\Modules\Country\Transformers\Api\CountryResource;
use Illuminate\Http\Resources\Json\Resource;

class CityResource extends Resource
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
            'name'     => json_decode($this->name),
            'country'  => new CountryResource($this->country),
        ];
    }

}

