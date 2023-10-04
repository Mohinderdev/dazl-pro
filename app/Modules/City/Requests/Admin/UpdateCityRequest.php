<?php

namespace App\Modules\City\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name.*'        => ['required'],
            'country_id'    => ['required'],
        ];
    }
}
