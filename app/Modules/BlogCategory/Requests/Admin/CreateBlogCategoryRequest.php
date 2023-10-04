<?php

namespace App\Modules\BlogCategory\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogCategoryRequest extends FormRequest
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
