<?php

namespace App\Modules\Realtor\Transformers\Api;

use Illuminate\Http\Resources\Json\Resource;

class RealtorResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id'    => $this->id,
            'email'  => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number'  => $this->phone_number,
            'zip_code' => $this->zip_code,
            'token' => $this->token,
            'real_state_agency_name' => $this->real_state_agency_name,
            'city_of_real_state_agency' => $this->city_of_real_state_agency,
            'state' => $this->state,
            'type' => 'realtor'
        ];
        if($this->paymentUrl){
            $data = $data + [
                    'payment_url' => $this->paymentUrl
                ];
        }
        return $data ;
    }

}

