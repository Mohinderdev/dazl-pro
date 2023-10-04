<?php

namespace App\Modules\Professional\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfessionalRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('professional')->id;
        return [
//            'name'  => ['required'],
//            'email' => ['required',"unique:professionals,email,$id,id"],
        ];
    }
}
