<?php

namespace App\Modules\AdditionalValue\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdditionalValueRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => ['required'],
        ];
    }
}
