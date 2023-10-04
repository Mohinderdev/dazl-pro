<?php

namespace App\Modules\Customer\Transformers\Api;

use Illuminate\Http\Resources\Json\Resource;

class CustomerResource extends Resource
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
            'id'    => $this->id,
            'email'  => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number'  => $this->phone_number,
            'zip_code' => $this->zip_code,
            'token' => $this->token,
            'type' => 'customer'
        ];
    }

}

