<?php

namespace App\Modules\User\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'name'            => ['required'],
//            'company_name'    => ['required_if:type,3,4'],
//            'social_id'       => ['required_if:register_way,2', 'unique:users,social_id'],
//            'register_way'    => ['required'],
//            'email'           => ['required', 'email', 'unique:users,email'],
//            'phone'           => ['required'],
//            'password'        => ['required', 'min:6'],
//            'receive_updated' => ['required', 'boolean'],
//            'type'            => ['required', 'in:1,2,3,4'],
//            'developer_type'  => ['required_if:type,3', 'in:1,2'],
//            'gender'          => ['in:1,2'],
//            'image'           => ['image'],
//            'country_id'      => ['required', 'exists:countries,id'],
//            'city_id'         => ['required_if:type,1', 'exists:cities,id'],
        ];
    }
}
