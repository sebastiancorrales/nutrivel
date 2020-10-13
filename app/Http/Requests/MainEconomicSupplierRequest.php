<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainEconomicSupplierRequest extends FormRequest
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
            'name' => 'required|string|max:191',
            'occupation' => 'required|string|max:191',
            'workplace' => 'required|string|max:191',
            'income' => 'required|max:191',
            'expenses' => 'required|max:191',
        ];
    }
}
