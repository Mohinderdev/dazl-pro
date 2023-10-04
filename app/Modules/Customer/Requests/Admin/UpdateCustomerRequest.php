<?php

namespace App\Modules\Customer\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('customer')->id;
        return [
            'email' => ['required',"unique:customers,email,$id,id"],
        ];
    }
}
