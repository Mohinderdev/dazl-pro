<?php

namespace App\Modules\HomeDiagnosticReport\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class CreateHomeDiagnosticReportRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'client_email' => ['required'],
//            'street_no' => ['required'],
//            'street_name' => ['required'],
//            'city' =>['required'],
//            'state' => ['required'],
//            'zip_code' => ['required'],
            'highest_price' => ['required' ,'numeric'],
            'lowest_price' => ['required','numeric'],
            'year_built' => ['required'],
            'bathrooms' => ['required'],
            'bedrooms' => ['required'],
            'basement' => ['required'],
            'gross_size' => ['required'],
            'spaces' => ['required'],
            'parking_features' => ['required'],
            'property_stories' => ['required'],
            'structure_type' => ['required'],
            'lot_size' => ['required'],
            'location' => ['required'],
            'foundation_type' => ['required'],
            'tax_accessed_value' => ['required'],
            'annual_tax_amount' => ['required'],
            'sale_date' => ['required'],
            'sale_amount' => ['required'],
            'type' => ['required'],
            'phd_description' => ['required'],
        ];
    }
}
