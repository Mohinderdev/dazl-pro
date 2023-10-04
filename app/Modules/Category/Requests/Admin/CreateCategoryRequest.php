<?php

namespace App\Modules\Category\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title.*'        => ['required'],
            'slug'        => ['required'],
            'image'        => ['required'],
        ];
    }
}
