<?php

namespace App\Modules\ContactUs\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactUsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'member_name' => ['required'],
            'property_address' => ['required'],
            'company_name' => ['required'],
            'contact_name' => ['required'],
            'issue_description' => ['required'],
            'steps_resolve_issue' => ['required'],
            'issue_solution' => ['required'],
            'images' => ['array'],
            'images.*' => [""],
            'images_description' => ['array'],
            'images_description.*' => ['string']
        ];
    }
}
