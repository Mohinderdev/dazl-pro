<?php

namespace App\Modules\Customer\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'email' => ['required','unique:customers'],
            'password' => ['required','same:confirm_password','min:8','max:16'], //need to add more rules
            'confirm_password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone_number' => ['required'],
            'zip_code' => ['required'],
            'check_box' =>['required','accepted'],

        ];

    }

    public function messages(): array
    {

        $checkboxErrorMsg = 'Please agree on the terms.';
        return [
            'check_box.required' => $checkboxErrorMsg,
            'check_box.accepted' => $checkboxErrorMsg
        ];
    }
}
