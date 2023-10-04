<?php

namespace App\Modules\Professional\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LoginProfessionalRequest extends FormRequest
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
