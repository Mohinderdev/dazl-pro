<?php

namespace App\Modules\ContactUs\Transformers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\Resource;

class ContactUsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'email'       => $this->email,
            'phone'       => $this->phone,
            'message'     => $this->message,
        ];
    }

}

