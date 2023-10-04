<?php

namespace App\Modules\Project\Requests\Admin;

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
//            'title'  => ['required'],
//            'category_id'  => ['required'],
//            'description'  => ['required'],
//            'publish'  => ['required'],
        ];
    }
}
