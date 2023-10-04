<?php

namespace App\Modules\FeatureIssue\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeatureIssueRequest extends FormRequest
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
