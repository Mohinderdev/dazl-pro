<?php

namespace App\Modules\Project\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class GetProjectsForCustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => 'required',
        ];
    }
}
