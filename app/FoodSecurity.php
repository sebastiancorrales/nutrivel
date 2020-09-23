<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodSecurity extends Model
{
    protected $fillable = [
        'where_get_water',
        'quantity_food_consume_day',
        'need_reduce_food_last_months',
        'cause',
        'grains',
        'fruits',
        'vegetables',
        'dairy',
        'eggs',
        'beneficiary_id'
    ];
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
