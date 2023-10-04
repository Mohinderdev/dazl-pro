<?php

namespace App\Modules\FeatureOption\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class GetFeatureOptionsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'feature_id' => ['required']
        ];
    }
}
