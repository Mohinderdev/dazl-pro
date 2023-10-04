<?php

namespace App\Modules\AdditionalValue\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdditionalValueRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
