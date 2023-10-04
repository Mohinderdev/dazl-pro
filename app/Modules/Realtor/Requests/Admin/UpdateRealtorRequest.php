<?php

namespace App\Modules\Realtor\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRealtorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('realtor')->id;
        return [
            'name'  => ['required'],
            'email' => ['required',"unique:realtors,email,$id,id"],
        ];
    }
}
