<?php

namespace App\Modules\Project\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectStatusAndSendEmailToProsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service_type_ids' => 'required',

        ];
    }
}
