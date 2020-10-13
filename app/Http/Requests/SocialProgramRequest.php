<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialProgramRequest extends FormRequest
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
            'enrolled_another_social_program' => 'required|string|max:191',
            'what_program' => 'required|string|max:191',
            'some_subsidy_type' => 'required|string|max:191',
            'what_subsidy_type' => 'required|string|max:191',
            'income_received' => 'required|string|max:191',

        ];
    }
}
