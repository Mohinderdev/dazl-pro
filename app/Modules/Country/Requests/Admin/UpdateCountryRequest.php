<?php

namespace App\Modules\Country\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name.*'        => ['required'],
            // 'currency_id'   => ['required'],
        ];
    }
}
