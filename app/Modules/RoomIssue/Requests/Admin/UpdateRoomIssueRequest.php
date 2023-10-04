<?php

namespace App\Modules\RoomIssue\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomIssueRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
