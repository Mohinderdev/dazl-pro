<?php

namespace App\Modules\Feature\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class GetRoomFeaturesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'room_id'  => ['required'],
        ];
    }
}
