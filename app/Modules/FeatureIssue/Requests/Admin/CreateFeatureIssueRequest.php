<?php

namespace App\Modules\FeatureIssue\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateFeatureIssueRequest extends FormRequest
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
            'feature_id' => ['required' , 'exists:features,id']
        ];
    }
}
