<?php

namespace App\Modules\Professional\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateProfessionalRequest extends FormRequest
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
            'company_name'  => ['required'],
            'company_street_address'  => ['required'],
            'state'  => ['required'],
            'zip_code'  => ['required'],
            'email'  => ['required','unique:professionals'],
        ];
    }
}
