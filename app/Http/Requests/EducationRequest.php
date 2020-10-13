<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
            'know_read_write' => 'required|string|max:191',
            'study_currently' => 'required|string|max:191',
            'educational_level' => 'required|string|max:191',
            'study_day' => 'required|string|max:191',
            'course_study_currently' => 'required|string|max:191',
            'perform_some_course' => 'required|string|max:191',
            'wich_course' => 'required|string|max:191',
            'document_number' => 'required|max:191',
          
        ];
    }
}
