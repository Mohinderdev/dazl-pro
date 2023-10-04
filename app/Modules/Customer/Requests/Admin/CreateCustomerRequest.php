<?php

namespace App\Modules\Customer\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'zip_code'  => ['required'],
            'phone_number'  => ['required'],
            'email'  => ['required','unique:customers'],
        ];
    }
}
