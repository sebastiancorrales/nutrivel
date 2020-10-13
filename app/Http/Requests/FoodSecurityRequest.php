<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodSecurityRequest extends FormRequest
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
            'where_get_water' => 'required|string|max:191',
            'quantity_food_consume_day' => 'required|string|max:191',
            'need_reduce_food_last_months' => 'required|string|max:191',
            'cause' => 'required|string|max:191',
            'grains' => 'required|string|max:191',
            'fruits' => 'required|string|max:191',
            'vegetables' => 'required|string|max:191',
            'dairy' => 'required|string|max:191',
            'eggs' => 'required|string|max:191',
        ];
    }
}
