<?php

namespace App\Modules\Company\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class GetCompanyFromProfessionalRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'professional_id'  => ['nullable'],
        ];
    }
}
