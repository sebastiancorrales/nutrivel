<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationConditionHousingRequest extends FormRequest
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
            'zone' => 'required|string|max:191',
            'state' => 'required|string|max:191',
            'departament' => 'required|string|max:191',
            'neighborhood' => 'required|string|max:191',
            'address' => 'required|string|max:191',
            'commune' => 'required|string|max:191',
            'telephone' => 'required|max:191',
            'cellphone' => 'required|max:191',
            'cellphone_2' => 'required|max:191',
            'socioeconomic_stratum' => 'required|max:191',
            'housing_type' => 'required|string|max:191',
            'housing_holding' => 'required|string|max:191',
            'housing_material' => 'required|string|max:191',
            'material_soil' => 'required|string|max:191',
            'service_water' => 'required|string|max:191',
            'service_light' => 'required|string|max:191',
            'service_sewerage' => 'required|string|max:191',
            'service_natural_gas' => 'required|string|max:191',
            'service_telephony' => 'required|string|max:191',
            'service_tv' => 'required|string|max:191',
            'service_internet' => 'required|string|max:191',
            'service_sanitary' => 'required|string|max:191',
            'quantity_rooms' => 'required|max:191',
            'number_rooms_where_sleep' => 'required|max:191',
        ];
    }
}
