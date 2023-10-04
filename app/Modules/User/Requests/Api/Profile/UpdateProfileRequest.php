<?php

namespace App\Modules\User\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => ['required'],
            'phone'      => ['required'],
            'image'      => ['image'],
        ];
    }
}
