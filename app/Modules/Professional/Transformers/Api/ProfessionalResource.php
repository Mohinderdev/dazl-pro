<?php

namespace App\Modules\Professional\Transformers\Api;

use Illuminate\Http\Resources\Json\Resource;

class ProfessionalResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $data =  [
            'id'    => $this->id,
            'email'  => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number'  => $this->phone_number,
            'zip_code' => $this->zip_code,
            'token' => $this->token,
            'company_name' => $this->company_name,
            'company_street_address' => $this->company_street_address,
            'company_city' => $this->company_city,
            'state' => $this->state,
            'type' => 'professional'
        ];
        if($this->paymentUrl){
            $data = $data + [
                'payment_url' => $this->paymentUrl
            ];
        }
        return $data ;
    }

}

