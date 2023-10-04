<?php

namespace App\Modules\HomeDiagnosticReport\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class GetHouseDataRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address' => ['required'],
        ];
    }
}
