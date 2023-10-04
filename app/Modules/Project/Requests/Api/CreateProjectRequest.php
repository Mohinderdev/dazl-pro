<?php

namespace App\Modules\Project\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'images'  => ['required','array'],
            'features'  => ['required','array'],
            'feature_issues'  => ['required','array'],
            'description'  => ['required','string'],
            'room_id'  => ['required','exists:rooms,id'],
        ];
    }
}
