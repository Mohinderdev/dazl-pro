<?php

namespace App\Modules\ServiceType\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateServiceTypeRequest extends FormRequest
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
