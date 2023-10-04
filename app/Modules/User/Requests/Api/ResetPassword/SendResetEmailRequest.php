<?php

namespace App\Modules\User\Requests\Api\ResetPassword;

use Illuminate\Foundation\Http\FormRequest;

class SendResetEmailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'        => ['required', 'exists:users,email'],
        ];
    }
}
