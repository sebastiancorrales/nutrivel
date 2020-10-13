<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialSecurityRequest extends FormRequest
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
            'eps_name' => 'required|string|max:191',
            'afiliation_type' => 'required|string|max:191',
            'has_sisben' => 'required|string|max:191',
            'score_sisben' => 'required|string|max:191',
            'social_security_scheme_id' => 'required|string|max:191',
            'funcional_diversity_id' => 'required|string|max:191',
        ];
    }
}
