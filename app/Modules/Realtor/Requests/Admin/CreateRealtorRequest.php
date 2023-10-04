<?php

namespace App\Modules\Realtor\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateRealtorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'  => ['required'],
            'last_name'  => ['required'],
            'phone_number'  => ['required'],
            'real_state_agency_name'  => ['required'],
            'city_of_real_state_agency'  => ['required'],
            'state'  => ['required'],
            'zip_code'  => ['required'],
            'email'  => ['required','unique:realtors'],
        ];
    }
}
