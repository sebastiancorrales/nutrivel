<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PopulationDataRequest extends FormRequest
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
            'document_number' => 'required|max:191',
            'ethnicity' => 'required|max:191',
            'age_group' => 'required|max:191',
            'type_population' => 'required|max:191',
        ];
    }
}
