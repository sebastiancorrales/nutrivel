<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'                => 'required|string|max:191',
            'second_name'               => 'required|string|max:191',
            'first_last_name'           => 'required|string|max:191',
            'second_last_name'          => 'required|string|max:191',
            'document_type'             => 'required|string|max:191',
            'document_number'           => 'required|string|max:200',

            'gender'                    => 'required|string|max:200',
            'civil_status'              => 'required|string|max:200',
            'country_of_birth'          => 'required|string|max:200',
            'place_of_birth'            => 'required|string|max:200',
            'birthday'                  => '',
            'birth_term'                => 'required|string|max:200',
            'number_months_birth'       => 'required|numeric|max:200',
            // 'kinship_other_familily'    => 'required|string|max:200',
            'family_type'               => 'required|string|max:200',
            'displaced_population'      => 'required|string|max:200',
            'income_weight'             => 'required|numeric|max:200',
            'income_size'               => 'required|numeric|max:200',
            'nutritional_state_income'  => 'required|string|max:200',

        ];
    }
}
