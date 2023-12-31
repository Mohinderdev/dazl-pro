<?php

namespace App\Modules\User\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
