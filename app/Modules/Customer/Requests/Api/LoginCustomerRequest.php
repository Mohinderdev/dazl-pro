<?php

namespace App\Modules\Customer\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LoginCustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'        => ['required','email'],
            'password'     => ['required'],
        ];
    }
}
