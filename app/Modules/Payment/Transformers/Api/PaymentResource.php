<?php

namespace App\Modules\Payment\Transformers\Api;

use Illuminate\Http\Resources\Json\Resource;

class PaymentResource extends Resource
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
        ];
    }

}

