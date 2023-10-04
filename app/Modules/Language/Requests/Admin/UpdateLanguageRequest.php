<?php

namespace App\Modules\Language\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLanguageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => ['required'],
            'code'          => ['required'],
        ];
    }
}
