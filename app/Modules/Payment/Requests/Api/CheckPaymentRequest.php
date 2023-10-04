<?php

namespace App\Modules\Payment\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class CheckPaymentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'session_id' => ['required'],
        ];
    }
}
