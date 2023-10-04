<?php

namespace App\Modules\FeatureOption\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeatureOptionRequest extends FormRequest
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
